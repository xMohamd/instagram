@props(['url'])
<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Laravel')
                <img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">
            @elseif (trim($slot) === 'Instagram')
                <img src="{{ asset('logo-text.svg') }}" class="logo" style="width: 200px" alt="Instagram Logo">
            @else
                {{ $slot }}
            @endif
        </a>
    </td>
</tr>
