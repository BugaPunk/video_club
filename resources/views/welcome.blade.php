<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>VIDEOCLUB</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

  <!-- Styles -->
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .parallax-slide {
      transition: opacity 1s ease-in-out, transform 0.5s ease-out;
    }

    .overlay {
      background: rgba(0, 0, 0, 0.5);
    }

    .header {
      background: rgba(0, 0, 0, 0);
    }

    /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */
    *,
    ::after,
    ::before {
      box-sizing: border-box;
      border-width: 0;
      border-style: solid;
      border-color: #e5e7eb
    }

    ::after,
    ::before {
      --tw-content: ''
    }

    :host,
    html {
      line-height: 1.5;
      -webkit-text-size-adjust: 100%;
      -moz-tab-size: 4;
      tab-size: 4;
      font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
      font-feature-settings: normal;
      font-variation-settings: normal;
      -webkit-tap-highlight-color: transparent
    }

    body {
      margin: 0;
      line-height: inherit
    }

    hr {
      height: 0;
      color: inherit;
      border-top-width: 1px
    }

    abbr:where([title]) {
      -webkit-text-decoration: underline dotted;
      text-decoration: underline dotted
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-size: inherit;
      font-weight: inherit
    }

    a {
      color: inherit;
      text-decoration: inherit
    }

    b,
    strong {
      font-weight: bolder
    }

    code,
    kbd,
    pre,
    samp {
      font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
      font-feature-settings: normal;
      font-variation-settings: normal;
      font-size: 1em
    }

    small {
      font-size: 80%
    }

    sub,
    sup {
      font-size: 75%;
      line-height: 0;
      position: relative;
      vertical-align: baseline
    }

    sub {
      bottom: -.25em
    }

    sup {
      top: -.5em
    }

    table {
      text-indent: 0;
      border-color: inherit;
      border-collapse: collapse
    }

    button,
    input,
    optgroup,
    select,
    textarea {
      font-family: inherit;
      font-feature-settings: inherit;
      font-variation-settings: inherit;
      font-size: 100%;
      font-weight: inherit;
      line-height: inherit;
      color: inherit;
      margin: 0;
      padding: 0
    }

    button,
    select {
      text-transform: none
    }

    [type=button],
    [type=reset],
    [type=submit],
    button {
      -webkit-appearance: button;
      background-color: transparent;
      background-image: none
    }

    :-moz-focusring {
      outline: auto
    }

    :-moz-ui-invalid {
      box-shadow: none
    }

    progress {
      vertical-align: baseline
    }

    ::-webkit-inner-spin-button,
    ::-webkit-outer-spin-button {
      height: auto
    }

    [type=search] {
      -webkit-appearance: textfield;
      outline-offset: -2px
    }

    ::-webkit-search-decoration {
      -webkit-appearance: none
    }

    ::-webkit-file-upload-button {
      -webkit-appearance: button;
      font: inherit
    }

    summary {
      display: list-item
    }

    blockquote,
    dd,
    dl,
    figure,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    hr,
    p,
    pre {
      margin: 0
    }

    fieldset {
      margin: 0;
      padding: 0
    }

    legend {
      padding: 0
    }

    menu,
    ol,
    ul {
      list-style: none;
      margin: 0;
      padding: 0
    }

    dialog {
      padding: 0
    }

    textarea {
      resize: vertical
    }

    input::placeholder,
    textarea::placeholder {
      opacity: 1;
      color: #9ca3af
    }

    [role=button],
    button {
      cursor: pointer
    }

    :disabled {
      cursor: default
    }

    audio,
    canvas,
    embed,
    iframe,
    img,
    object,
    svg,
    video {
      display: block;
      vertical-align: middle
    }

    img,
    video {
      max-width: 100%;
      height: auto
    }

    [hidden] {
      display: none
    }

    *,
    ::before,
    ::after {
      --tw-border-spacing-x: 0;
      --tw-border-spacing-y: 0;
      --tw-translate-x: 0;
      --tw-translate-y: 0;
      --tw-rotate: 0;
      --tw-skew-x: 0;
      --tw-skew-y: 0;
      --tw-scale-x: 1;
      --tw-scale-y: 1;
      --tw-pan-x: ;
      --tw-pan-y: ;
      --tw-pinch-zoom: ;
      --tw-scroll-snap-strictness: proximity;
      --tw-gradient-from-position: ;
      --tw-gradient-via-position: ;
      --tw-gradient-to-position: ;
      --tw-ordinal: ;
      --tw-slashed-zero: ;
      --tw-numeric-figure: ;
      --tw-numeric-spacing: ;
      --tw-numeric-fraction: ;
      --tw-ring-inset: ;
      --tw-ring-offset-width: 0px;
      --tw-ring-offset-color: #fff;
      --tw-ring-color: rgb(59 130 246 / 0.5);
      --tw-ring-offset-shadow: 0 0 #0000;
      --tw-ring-shadow: 0 0 #0000;
      --tw-shadow: 0 0 #0000;
      --tw-shadow-colored: 0 0 #0000;
      --tw-blur: ;
      --tw-brightness: ;
      --tw-contrast: ;
      --tw-grayscale: ;
      --tw-hue-rotate: ;
      --tw-invert: ;
      --tw-saturate: ;
      --tw-sepia: ;
      --tw-drop-shadow: ;
      --tw-backdrop-blur: ;
      --tw-backdrop-brightness: ;
      --tw-backdrop-contrast: ;
      --tw-backdrop-grayscale: ;
      --tw-backdrop-hue-rotate: ;
      --tw-backdrop-invert: ;
      --tw-backdrop-opacity: ;
      --tw-backdrop-saturate: ;
      --tw-backdrop-sepia:
    }

    ::backdrop {
      --tw-border-spacing-x: 0;
      --tw-border-spacing-y: 0;
      --tw-translate-x: 0;
      --tw-translate-y: 0;
      --tw-rotate: 0;
      --tw-skew-x: 0;
      --tw-skew-y: 0;
      --tw-scale-x: 1;
      --tw-scale-y: 1;
      --tw-pan-x: ;
      --tw-pan-y: ;
      --tw-pinch-zoom: ;
      --tw-scroll-snap-strictness: proximity;
      --tw-gradient-from-position: ;
      --tw-gradient-via-position: ;
      --tw-gradient-to-position: ;
      --tw-ordinal: ;
      --tw-slashed-zero: ;
      --tw-numeric-figure: ;
      --tw-numeric-spacing: ;
      --tw-numeric-fraction: ;
      --tw-ring-inset: ;
      --tw-ring-offset-width: 0px;
      --tw-ring-offset-color: #fff;
      --tw-ring-color: rgb(59 130 246 / 0.5);
      --tw-ring-offset-shadow: 0 0 #0000;
      --tw-ring-shadow: 0 0 #0000;
      --tw-shadow: 0 0 #0000;
      --tw-shadow-colored: 0 0 #0000;
      --tw-blur: ;
      --tw-brightness: ;
      --tw-contrast: ;
      --tw-grayscale: ;
      --tw-hue-rotate: ;
      --tw-invert: ;
      --tw-saturate: ;
      --tw-sepia: ;
      --tw-drop-shadow: ;
      --tw-backdrop-blur: ;
      --tw-backdrop-brightness: ;
      --tw-backdrop-contrast: ;
      --tw-backdrop-grayscale: ;
      --tw-backdrop-hue-rotate: ;
      --tw-backdrop-invert: ;
      --tw-backdrop-opacity: ;
      --tw-backdrop-saturate: ;
      --tw-backdrop-sepia:
    }

    .absolute {
      position: absolute
    }

    .relative {
      position: relative
    }

    .-left-20 {
      left: -5rem
    }

    .top-0 {
      top: 0px
    }

    .-bottom-16 {
      bottom: -4rem
    }

    .-left-16 {
      left: -4rem
    }

    .-mx-3 {
      margin-left: -0.75rem;
      margin-right: -0.75rem
    }

    .mt-4 {
      margin-top: 1rem
    }

    .mt-6 {
      margin-top: 1.5rem
    }

    .flex {
      display: flex
    }

    .grid {
      display: grid
    }

    .hidden {
      display: none
    }

    .aspect-video {
      aspect-ratio: 16 / 9
    }

    .size-12 {
      width: 3rem;
      height: 3rem
    }

    .size-5 {
      width: 1.25rem;
      height: 1.25rem
    }

    .size-6 {
      width: 1.5rem;
      height: 1.5rem
    }

    .h-12 {
      height: 3rem
    }

    .h-40 {
      height: 10rem
    }

    .h-full {
      height: 100%
    }

    .min-h-screen {
      min-height: 100vh
    }

    .w-full {
      width: 100%
    }

    .w-\[calc\(100\%\+8rem\)\] {
      width: calc(100% + 8rem)
    }

    .w-auto {
      width: auto
    }

    .max-w-\[877px\] {
      max-width: 877px
    }

    .max-w-2xl {
      max-width: 42rem
    }

    .flex-1 {
      flex: 1 1 0%
    }

    .shrink-0 {
      flex-shrink: 0
    }

    .grid-cols-2 {
      grid-template-columns: repeat(2, minmax(0, 1fr))
    }

    .flex-col {
      flex-direction: column
    }

    .items-start {
      align-items: flex-start
    }

    .items-center {
      align-items: center
    }

    .items-stretch {
      align-items: stretch
    }

    .justify-end {
      justify-content: flex-end
    }

    .justify-center {
      justify-content: center
    }

    .gap-2 {
      gap: 0.5rem
    }

    .gap-4 {
      gap: 1rem
    }

    .gap-6 {
      gap: 1.5rem
    }

    .self-center {
      align-self: center
    }

    .overflow-hidden {
      overflow: hidden
    }

    .rounded-\[10px\] {
      border-radius: 10px
    }

    .rounded-full {
      border-radius: 9999px
    }

    .rounded-lg {
      border-radius: 0.5rem
    }

    .rounded-md {
      border-radius: 0.375rem
    }

    .rounded-sm {
      border-radius: 0.125rem
    }

    .bg-\[\#FF2D20\]\/10 {
      background-color: rgb(255 45 32 / 0.1)
    }

    .bg-white {
      --tw-bg-opacity: 1;
      background-color: rgb(255 255 255 / var(--tw-bg-opacity))
    }

    .bg-gradient-to-b {
      background-image: linear-gradient(to bottom, var(--tw-gradient-stops))
    }

    .from-transparent {
      --tw-gradient-from: transparent var(--tw-gradient-from-position);
      --tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);
      --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
    }

    .via-white {
      --tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-to-position);
      --tw-gradient-stops: var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)
    }

    .to-white {
      --tw-gradient-to: #fff var(--tw-gradient-to-position)
    }

    .stroke-\[\#FF2D20\] {
      stroke: #FF2D20
    }

    .object-cover {
      object-fit: cover
    }

    .object-top {
      object-position: top
    }

    .p-6 {
      padding: 1.5rem
    }

    .px-6 {
      padding-left: 1.5rem;
      padding-right: 1.5rem
    }

    .py-10 {
      padding-top: 2.5rem;
      padding-bottom: 2.5rem
    }

    .px-3 {
      padding-left: 0.75rem;
      padding-right: 0.75rem
    }

    .py-16 {
      padding-top: 4rem;
      padding-bottom: 4rem
    }

    .py-2 {
      padding-top: 0.5rem;
      padding-bottom: 0.5rem
    }

    .pt-3 {
      padding-top: 0.75rem
    }

    .text-center {
      text-align: center
    }

    .font-sans {
      font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji
    }

    .text-sm {
      font-size: 0.875rem;
      line-height: 1.25rem
    }

    .text-sm\/relaxed {
      font-size: 0.875rem;
      line-height: 1.625
    }

    .text-xl {
      font-size: 1.25rem;
      line-height: 1.75rem
    }

    .font-semibold {
      font-weight: 600
    }

    .text-black {
      --tw-text-opacity: 1;
      color: rgb(0 0 0 / var(--tw-text-opacity))
    }

    .text-white {
      --tw-text-opacity: 1;
      color: rgb(255 255 255 / var(--tw-text-opacity))
    }

    .underline {
      -webkit-text-decoration-line: underline;
      text-decoration-line: underline
    }

    .antialiased {
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale
    }

    .shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\] {
      --tw-shadow: 0px 14px 34px 0px rgba(0, 0, 0, 0.08);
      --tw-shadow-colored: 0px 14px 34px 0px var(--tw-shadow-color);
      box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
    }

    .ring-1 {
      --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
      --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
      box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
    }

    .ring-transparent {
      --tw-ring-color: transparent
    }

    .ring-white\/\[0\.05\] {
      --tw-ring-color: rgb(255 255 255 / 0.05)
    }

    .drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\] {
      --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, 0.06));
      filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
    }

    .drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\] {
      --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, 0.25));
      filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
    }

    .transition {
      transition-property: color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
      transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
      transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
      transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
      transition-duration: 150ms
    }

    .duration-300 {
      transition-duration: 300ms
    }

    .selection\:bg-\[\#FF2D20\] *::selection {
      --tw-bg-opacity: 1;
      background-color: rgb(255 45 32 / var(--tw-bg-opacity))
    }

    .selection\:text-white *::selection {
      --tw-text-opacity: 1;
      color: rgb(255 255 255 / var(--tw-text-opacity))
    }

    .selection\:bg-\[\#FF2D20\]::selection {
      --tw-bg-opacity: 1;
      background-color: rgb(255 45 32 / var(--tw-bg-opacity))
    }

    .selection\:text-white::selection {
      --tw-text-opacity: 1;
      color: rgb(255 255 255 / var(--tw-text-opacity))
    }

    .hover\:text-black:hover {
      --tw-text-opacity: 1;
      color: rgb(0 0 0 / var(--tw-text-opacity))
    }

    .hover\:text-black\/70:hover {
      color: rgb(0 0 0 / 0.7)
    }

    .hover\:ring-black\/20:hover {
      --tw-ring-color: rgb(0 0 0 / 0.2)
    }

    .focus\:outline-none:focus {
      outline: 2px solid transparent;
      outline-offset: 2px
    }

    .focus-visible\:ring-1:focus-visible {
      --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
      --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
      box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
    }

    .focus-visible\:ring-\[\#FF2D20\]:focus-visible {
      --tw-ring-opacity: 1;
      --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity))
    }

    @media (min-width: 640px) {
      .sm\:size-16 {
        width: 4rem;
        height: 4rem
      }

      .sm\:size-6 {
        width: 1.5rem;
        height: 1.5rem
      }

      .sm\:pt-5 {
        padding-top: 1.25rem
      }
    }

    @media (min-width: 768px) {
      .md\:row-span-3 {
        grid-row: span 3 / span 3
      }
    }

    @media (min-width: 1024px) {
      .lg\:col-start-2 {
        grid-column-start: 2
      }

      .lg\:h-16 {
        height: 4rem
      }

      .lg\:max-w-7xl {
        max-width: 80rem
      }

      .lg\:grid-cols-3 {
        grid-template-columns: repeat(3, minmax(0, 1fr))
      }

      .lg\:grid-cols-2 {
        grid-template-columns: repeat(2, minmax(0, 1fr))
      }

      .lg\:flex-col {
        flex-direction: column
      }

      .lg\:items-end {
        align-items: flex-end
      }

      .lg\:justify-center {
        justify-content: center
      }

      .lg\:gap-8 {
        gap: 2rem
      }

      .lg\:p-10 {
        padding: 2.5rem
      }

      .lg\:pb-10 {
        padding-bottom: 2.5rem
      }

      .lg\:pt-0 {
        padding-top: 0px
      }

      .lg\:text-\[\#FF2D20\] {
        --tw-text-opacity: 1;
        color: rgb(255 45 32 / var(--tw-text-opacity))
      }
    }

    @media (prefers-color-scheme: dark) {
      .dark\:block {
        display: block
      }

      .dark\:hidden {
        display: none
      }

      .dark\:bg-black {
        --tw-bg-opacity: 1;
        background-color: rgb(0 0 0 / var(--tw-bg-opacity))
      }

      .dark\:bg-zinc-900 {
        --tw-bg-opacity: 1;
        background-color: rgb(24 24 27 / var(--tw-bg-opacity))
      }

      .dark\:via-zinc-900 {
        --tw-gradient-to: rgb(24 24 27 / 0) var(--tw-gradient-to-position);
        --tw-gradient-stops: var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)
      }

      .dark\:to-zinc-900 {
        --tw-gradient-to: #18181b var(--tw-gradient-to-position)
      }

      .dark\:text-white\/50 {
        color: rgb(255 255 255 / 0.5)
      }

      .dark\:text-white {
        --tw-text-opacity: 1;
        color: rgb(255 255 255 / var(--tw-text-opacity))
      }

      .dark\:text-white\/70 {
        color: rgb(255 255 255 / 0.7)
      }

      .dark\:ring-zinc-800 {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(39 39 42 / var(--tw-ring-opacity))
      }

      .dark\:hover\:text-white:hover {
        --tw-text-opacity: 1;
        color: rgb(255 255 255 / var(--tw-text-opacity))
      }

      .dark\:hover\:text-white\/70:hover {
        color: rgb(255 255 255 / 0.7)
      }

      .dark\:hover\:text-white\/80:hover {
        color: rgb(255 255 255 / 0.8)
      }

      .dark\:hover\:ring-zinc-700:hover {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(63 63 70 / var(--tw-ring-opacity))
      }

      .dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity))
      }

      .dark\:focus-visible\:ring-white:focus-visible {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity))
      }
    }
  </style>
</head>

<body>
  <div class="font-sans antialiased dark:text-white/50 dark:bg-gradient-to-r from-slate-950 to-gray-950">
    <!-- Header semitransparente -->
    <header
      class="header fixed top-0 left-0 right-0 z-50 py-4 px-6 flex justify-between items-center bg-gradient-to-b from-gray-950 to-transparent">
      <div class="container mx-auto flex flex-wrap p-1 flex-col md:flex-row items-center">
        <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
          <a class="mr-5 hover:text-white">First Link</a>
          <a class="mr-5 hover:text-white">Second Link</a>
          <a class="mr-5 hover:text-white">Third Link</a>
          <a class="hover:text-white">Fourth Link</a>
        </nav>
        <a
          class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-white lg:items-center lg:justify-center mb-4 md:mb-0">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
            stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full"
            viewBox="0 0 24 24">
            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
          </svg>
          <span class="ml-3 text-xl xl:block lg:hidden">Tailblocks</span>
        </a>
        <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
          @if (Route::has('login'))
          <nav class="-mx-3 flex flex-1 justify-end">
            @auth
            <a href="{{ url('/dashboard') }}"
              class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
              Dashboard
            </a>
            @else
            <a href="{{ route('login') }}"
              class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
              Log in
            </a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}"
              class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
              Register
            </a>
            @endif
            @endauth
          </nav>
          @endif
        </div>
      </div>
    </header>

    <div id="parallaxCarousel" class="relative h-screen w-full overflow-hidden">
      <div class="parallax-slide absolute top-0 left-0 h-full w-full bg-cover bg-center"
        style="background-image: url('https://i.pinimg.com/originals/cf/95/9b/cf959b32cbef39dcebbb947efcfe7561.jpg');">
        <div class="overlay absolute inset-0"></div>
      </div>
      <div class="parallax-slide absolute top-0 left-0 h-full w-full bg-cover bg-center opacity-0"
        style="background-image: url('https://sun9-28.userapi.com/Sw7_Uz1I1KN0vnTDAKrPSa9zAPCzKd_0WOPEIA/oLx24-LEDW0.jpg');">
        <div class="overlay absolute inset-0"></div>
      </div>
      <div class="parallax-slide absolute top-0 left-0 h-full w-full bg-cover bg-center opacity-0"
        style="background-image: url('https://wallpapercat.com/w/full/5/e/4/189100-2560x1600-desktop-hd-alien-movie-background-photo.jpg');">
        <div class="overlay absolute inset-0"></div>
      </div>
      <div class="parallax-slide absolute top-0 left-0 h-full w-full bg-cover bg-center opacity-0"
        style="background-image: url('https://stephenking.pl/wp-content/uploads/2024/04/Skazani-na-Shawshank.jpg');">
        <div class="overlay absolute inset-0"></div>
      </div>
      <div class="parallax-slide absolute top-0 left-0 h-full w-full bg-cover bg-center opacity-0"
        style="background-image: url('https://wallpapercave.com/wp/wp2100170.jpg');">
        <div class="overlay absolute inset-0"></div>
      </div>
      <div class="parallax-slide absolute top-0 left-0 h-full w-full bg-cover bg-center opacity-0"
        style="background-image: url('https://wallpapers.com/images/file/4k-guardians-of-the-galaxy-uwqc7y1axi4o5a0b.jpg');">
        <div class="overlay absolute inset-0"></div>
      </div>
      <div class="parallax-slide absolute top-0 left-0 h-full w-full bg-cover bg-center opacity-0"
        style="background-image: url('https://kairos2.com/superman-returns-why-it-deserves-a-rewatch-386037.jpg');">
        <div class="overlay absolute inset-0"></div>
      </div>
      <div class="parallax-slide absolute top-0 left-0 h-full w-full bg-cover bg-center opacity-0"
        style="background-image: url('https://images.boosty.to/image/ddc83ab8-5cae-4eb0-87e3-88510a43db68?change_time=1688969798');">
        <div class="overlay absolute inset-0"></div>
      </div>

      <!-- Contenido -->
      <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center z-10">
        <div class="container mx-auto flex py-24 items-center">
          <div
            class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-center md:text-left mb-16 md:mb-0 items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-white">¿Quieres ver disfrutar ya?</h1>
            <p class="mb-8 leading-relaxed">A partir de USD 3,99. Cancela cuando quieras.</p>
            <div class="flex w-full md:justify-center justify-center items-end">
              <div class="relative mr-4 md:w-full lg:w-full xl:w-1/2 w-2/4">
                <label for="hero-field" class="leading-7 text-sm text-gray-400">Correo</label>
                <input type="text" id="hero-field" name="hero-field"
                  class="w-full bg-gray-800 rounded bg-opacity-40 border border-gray-700 focus:ring-2 focus:ring-indigo-900 focus:bg-transparent focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
              </div>
              <button
                class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Solicitar</button>
            </div>
            <p class="text-sm mt-2 text-gray-400 mb-8 w-full text-center">
              Ingresa tu email para crear una cuenta.
            </p>
            <div class="flex lg:flex-row md:flex-col text-gray-300">
              <button
                class="bg-gray-800 inline-flex py-3 px-5 rounded-lg items-center hover:bg-gray-700 hover:text-white focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 512 512">
                  <path
                    d="M99.617 8.057a50.191 50.191 0 00-38.815-6.713l230.932 230.933 74.846-74.846L99.617 8.057zM32.139 20.116c-6.441 8.563-10.148 19.077-10.148 30.199v411.358c0 11.123 3.708 21.636 10.148 30.199l235.877-235.877L32.139 20.116zM464.261 212.087l-67.266-37.637-81.544 81.544 81.548 81.548 67.273-37.64c16.117-9.03 25.738-25.442 25.738-43.908s-9.621-34.877-25.749-43.907zM291.733 279.711L60.815 510.629c3.786.891 7.639 1.371 11.492 1.371a50.275 50.275 0 0027.31-8.07l266.965-149.372-74.849-74.847z">
                  </path>
                </svg>
                <span class="ml-4 flex items-start flex-col leading-none">
                  <span class="text-xs text-gray-400 mb-1">Consíguelo en la</span>
                  <span class="title-font font-medium">Google Play</span>
                </span>
              </button>
              <button
                class="bg-gray-800 inline-flex py-3 px-5 rounded-lg items-center hover:bg-gray-700 hover:text-white focus:outline-none lg:ml-4 md:ml-0 ml-4 md:mt-4 mt-0 lg:mt-0">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 305 305">
                  <path
                    d="M40.74 112.12c-25.79 44.74-9.4 112.65 19.12 153.82C74.09 286.52 88.5 305 108.24 305c.37 0 .74 0 1.13-.02 9.27-.37 15.97-3.23 22.45-5.99 7.27-3.1 14.8-6.3 26.6-6.3 11.22 0 18.39 3.1 25.31 6.1 6.83 2.95 13.87 6 24.26 5.81 22.23-.41 35.88-20.35 47.92-37.94a168.18 168.18 0 0021-43l.09-.28a2.5 2.5 0 00-1.33-3.06l-.18-.08c-3.92-1.6-38.26-16.84-38.62-58.36-.34-33.74 25.76-51.6 31-54.84l.24-.15a2.5 2.5 0 00.7-3.51c-18-26.37-45.62-30.34-56.73-30.82a50.04 50.04 0 00-4.95-.24c-13.06 0-25.56 4.93-35.61 8.9-6.94 2.73-12.93 5.09-17.06 5.09-4.64 0-10.67-2.4-17.65-5.16-9.33-3.7-19.9-7.9-31.1-7.9l-.79.01c-26.03.38-50.62 15.27-64.18 38.86z">
                  </path>
                  <path
                    d="M212.1 0c-15.76.64-34.67 10.35-45.97 23.58-9.6 11.13-19 29.68-16.52 48.38a2.5 2.5 0 002.29 2.17c1.06.08 2.15.12 3.23.12 15.41 0 32.04-8.52 43.4-22.25 11.94-14.5 17.99-33.1 16.16-49.77A2.52 2.52 0 00212.1 0z">
                  </path>
                </svg>
                <span class="ml-4 flex items-start flex-col leading-none">
                  <span class="text-xs text-gray-400 mb-1">Descárgalo en la</span>
                  <span class="title-font font-medium">App Store</span>
                </span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="text-gray-400 bg-gray-900 body-font relative">
    <div class="absolute inset-0 bg-gray-900">
      <iframe title="map" width="100%" height="100%" style="filter: grayscale(1) contrast(1.2) opacity(0.16);" frameborder="0" marginheight="0" marginwidth="0" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.4215077721155!2d-68.13253932486631!3d-16.504804584239597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f2064df652367%3A0xddb4c11ab8c8d666!2sMonoblock%20UMSA!5e0!3m2!1ses!2sbo!4v1726606163662!5m2!1ses!2sbo"></iframe>
    </div>
    <div class="container px-5 py-24 mx-auto flex">
      <div class="lg:w-1/3 md:w-1/2 bg-gray-900 shadow-md rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10">
        <h2 class="text-white text-lg mb-1 font-medium title-font">Feedback</h2>
        <p class="leading-relaxed mb-5">Post-ironic portland shabby chic echo park, banjo fashion axe</p>
        <div class="relative mb-4">
          <label for="email" class="leading-7 text-sm text-gray-400">Email</label>
          <input type="email" id="email" name="email" class="w-full bg-gray-800 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative mb-4">
          <label for="message" class="leading-7 text-sm text-gray-400">Message</label>
          <textarea id="message" name="message" class="w-full bg-gray-800 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 h-32 text-base outline-none text-gray-100 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
        </div>
        <button class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
        <p class="text-xs text-gray-400 text-opacity-90 mt-3">Chicharrones blog helvetica normcore iceland tousled brook viral artisan.</p>
      </div>
    </div>
  </section>

  <script>
    const carousel = document.getElementById('parallaxCarousel');
    const slides = carousel.querySelectorAll('.parallax-slide');
    const indicators = carousel.querySelectorAll('button');
    const slideTitle = document.getElementById('slideTitle');
    let currentSlide = 0;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.style.opacity = i === index ? '1' : '0';
            slide.style.transform = `translateX(${(i - index) * 10}%)`;
        });
        indicators.forEach((indicator, i) => {
            indicator.classList.toggle('bg-gray-950', i === index);
            indicator.classList.toggle('bg-slate-950', i !== index);
        });
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }

    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            currentSlide = index;
            showSlide(currentSlide);
        });
    });

    setInterval(nextSlide, 4000);
  </script>
</body>

</html>