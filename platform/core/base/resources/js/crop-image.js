class CropImage {
    modal = $(document).find('.crop-image-modal')
    image = this.modal.find('.cropper-image')
    cropper = null

    constructor() {
        this.modal
            .on('change', 'input[type="file"]', (e) => {
                const files = e.target.files

                if (!files || files.length === 0) {
                    return
                }

                const file = files[0]

                if (URL) {
                    this.loadImage(URL.createObjectURL(file))
                } else if (FileReader) {
                    const reader = new FileReader()
                    reader.onload = () => this.loadImage(reader.result)
                    reader.readAsDataURL(file)
                }
            })
            .on('click', 'button[type="submit"]', (e) => {
                e.preventDefault()

                const button = $(e.currentTarget)
                const form = this.modal.find('form')

                if (!this.cropper) {
                    return
                }

                const canvas = this.cropper.getCroppedCanvas({
                    width: 160,
                    height: 160,
                })

                canvas.toBlob((blob) => {
                    const formData = new FormData()

                    formData.append(form.find('input[type="file"]').prop('name'), blob)

                    $httpClient
                        .make()
                        .withButtonLoading(button)
                        .post(form.prop('action'), formData)
                        .then(({ data }) => {
                            this.updateImage(data.data.url)

                            Botble.showSuccess(data.message)
                            this.modal.modal('hide')
                        })
                })
            })
            .on('shown.bs.modal', (e) => {
                const originalImage = $(e.relatedTarget).closest('.crop-image-container').find('.crop-image-original')

                const image = new Image()
                const source = originalImage.attr('src')

                if (source) {
                    image.src = source
                    image.onload = () => this.loadImage(image.src)
                }
            })
            .on('hidden.bs.modal', () => {
                this.destroy()
            })

        $(document).on('click', '[data-bb-toggle="delete-avatar"]', (e) => {
            e.preventDefault()

            const button = $(e.currentTarget)

            $httpClient
                .make()
                .post(button.prop('href'))
                .then(({ data }) => {
                    this.updateImage(data.data.url)

                    Botble.showSuccess(data.message)
                    this.modal.modal('hide')
                })
        })
    }

    init() {
        this.cropper && this.cropper.destroy()

        this.cropper = new Cropper(this.image[0], {
            aspectRatio: 1,
            preview: '.img-preview',
        })
    }

    destroy() {
        this.cropper && this.cropper.destroy()
        this.cropper = null
        this.image.prop('src', '')
        this.modal.find('input[type="file"]').val('')
    }

    loadImage(source) {
        if (!source) {
            return
        }

        this.image.off('load.cropImage').one('load.cropImage', () => this.init())
        this.image.prop('src', source)
    }

    updateImage(url) {
        $(document)
            .find('.crop-image-original')
            .each((i, el) => {
                if ($(el).is('img')) {
                    $(el).prop('src', url)
                } else {
                    $(el).css('background-image', `url(${url})`)
                }
            })
    }
}

$(() => {
    new CropImage()
})
