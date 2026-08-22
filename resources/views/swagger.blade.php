<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>API Docs</title>
    <link rel="stylesheet" href="https://unpkg.com/swagger-ui-dist@5/swagger-ui.css">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            background: #f5f7fb;
            font-family: Arial, sans-serif;
        }

        .docs-header {
            background: linear-gradient(135deg, #081524 0%, #0d223a 100%);
            color: #fff;
            padding: 20px 24px;
        }

        .docs-header h1 {
            margin: 0 0 6px;
            font-size: 1.6rem;
        }

        .docs-header p {
            margin: 0;
            color: rgba(255, 255, 255, 0.8);
        }

        #swagger-ui {
            max-width: 1280px;
            margin: 0 auto;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="docs-header">
        <h1>All Catholic Media API Docs</h1>
        <p>Swagger UI for testing the app endpoints locally.</p>
    </div>

    <div id="swagger-ui"></div>

    <script src="https://unpkg.com/swagger-ui-dist@5/swagger-ui-bundle.js"></script>
    <script src="https://unpkg.com/swagger-ui-dist@5/swagger-ui-standalone-preset.js"></script>
    <script>
        window.onload = function () {
            window.SwaggerUIBundle({
                url: "{{ route('api.docs.spec') }}",
                dom_id: '#swagger-ui',
                deepLinking: true,
                presets: [
                    window.SwaggerUIBundle.presets.apis,
                    window.SwaggerUIStandalonePreset
                ],
                layout: 'StandaloneLayout',
                displayRequestDuration: true,
                tryItOutEnabled: true,
            });
        };
    </script>
</body>
</html>
