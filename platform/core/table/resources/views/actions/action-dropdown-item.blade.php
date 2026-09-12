@php
    /** @var Botble\Table\Actions\Action $action */

    $customClass = $action->getAttribute('class');
    $dropdownItemClass = $customClass
        ? (is_array($customClass) ? implode(' ', $customClass) : $customClass)
        : implode(' ', ['dropdown-item', str_replace('btn-', 'text-', $action->getColor())]);
@endphp

<li>
    <a
        class="{{ $dropdownItemClass }}"
        @include('core/table::actions.includes.action-attributes', ['excludeClass' => true])
    >
        @include('core/table::actions.includes.action-icon')

        <span class="ms-1">{{ $action->getLabel() }}</span>
    </a>
</li>
