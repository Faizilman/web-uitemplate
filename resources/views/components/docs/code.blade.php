@props(['code'])

<div x-data="{

    copied: false,

    copy() {

        navigator.clipboard.writeText(
            @js($code)
        );

        this.copied = true;

        setTimeout(() => {

            this.copied = false;

        }, 2000);

    }

}" class="relative">

    {{-- Copy Button --}}
    <button @click="copy"
        class="
            absolute
            top-0
            right-3
            text-xs
            border
            rounded
            px-2
            py-1
        ">

        <span x-show="! copied">
            Copy
        </span>

        <span x-show="copied">
            Copied!
        </span>

    </button>

    {{-- Code --}}
    <pre class="
            overflow-x-auto
            p-4
            text-sm
        "><code>{{ $code }}</code></pre>

</div>
