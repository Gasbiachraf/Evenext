@props(['size' => 5, 'color' => 'currentColor', 'class' => ''])
<svg {{ $attributes->merge(['class' => 'h-' . $size . ' w-' . $size . ' ' . $class]) }} xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000">
    <path d="M1000 500c0 277-223 500-500 500S0 777 0 500 223 0 500 0s500 223 500 500zM875 317c-25 11-53 18-82 22 30-17 51-45 61-79-28 17-57 28-89 35-25-28-62-45-103-45-78 0-141 63-141 142 0 10 1 22 3 32-118-5-223-62-294-149-11 22-18 46-18 72 0 50 24 93 62 118-23 0-45-7-64-18v2c0 69 49 126 114 140-12 3-24 4-37 4-9 0-19-1-27-2 18 57 71 95 132 96-48 38-108 65-176 65-11 0-23-1-33-2 62 40 138 62 217 62 262 0 404-216 404-404v-18c28-19 51-45 71-73z"></path>
</svg>
