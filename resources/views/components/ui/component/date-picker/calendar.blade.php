@props([
    'label' => 'Date',
    'name' => 'date',
    'color' => 'primary',
    'variant' => 'soft',
])

@php

$colors = [

    'primary' => [
        'selected' => 'bg-blue-600 text-white dark:bg-blue-500',
        'hover' => 'hover:bg-blue-100 dark:hover:bg-blue-600/50',
        'focus' => 'focus-within:border-blue-600 dark:focus-within:border-blue-500',
    ],

    'tertiary' => [
        'selected' => 'bg-zinc-700 text-white dark:bg-zinc-900',
        'hover' => 'hover:bg-zinc-100 dark:hover:bg-zinc-800',
        'focus' => 'focus-within:border-zinc-500 dark:focus-within:border-zinc-400',
    ],

    'info' => [
        'selected' => 'bg-cyan-500 text-white',
        'hover' => 'hover:bg-cyan-100 dark:hover:bg-cyan-900/30',
        'focus' => 'focus-within:border-cyan-500',
    ],

    'warning' => [
        'selected' => 'bg-amber-500 text-white',
        'hover' => 'hover:bg-amber-100 dark:hover:bg-amber-900/30',
        'focus' => 'focus-within:border-amber-500',
    ],

];

$variants = [

    'soft' => '
        bg-white
        border border-zinc-200
        dark:bg-zinc-900
        dark:border-zinc-700
    ',

    'line' => '
        border border-zinc-300
        dark:border-zinc-700
        bg-white
        dark:bg-[#010101]
    ',

];

$calendars = [

    'soft' => '
        bg-white
        border border-zinc-200
        dark:bg-zinc-900
        dark:border-zinc-700
    ',

    'outline' => '
        bg-transparent
        border border-slate-300
        dark:border-slate-700
    ',

];

$currentColor = $colors[$color] ?? $colors['primary'];
$currentVariant = $variants[$variant] ?? $variants['soft'];
$currentCalendar = $calendars[$variant] ?? $calendars['soft'];

@endphp

<div

    x-data="{

        open:false,

        selected:null,

        month:new Date().getMonth(),

        year:new Date().getFullYear(),

        monthNames:[
            'January',
            'February',
            'March',
            'April',
            'May',
            'June',
            'July',
            'August',
            'September',
            'October',
            'November',
            'December'
        ],

        get daysInMonth(){

            return new Date(
                this.year,
                this.month+1,
                0
            ).getDate();

        },

        prev(){

            if(this.month==0){

                this.month=11;

                this.year--;

            }else{

                this.month--;

            }

        },

        next(){

            if(this.month==11){

                this.month=0;

                this.year++;

            }else{

                this.month++;

            }

        },

        select(day){

            this.selected=day;

            this.open=false;

        },

        get value(){

            if(!this.selected){

                return '';

            }

            return this.year+'-'+
                String(this.month+1).padStart(2,'0')+'-'+
                String(this.selected).padStart(2,'0');

        }

    }"

    class="relative w-full"

>

    <label
        class="
            mb-1.5
            block
            text-xs
            font-medium
            text-slate-500
            dark:text-slate-400
        "
    >
        {{ $label }}
    </label>

    <button

        type="button"

        @click="open=!open"

        class="
            w-full
            min-h-10
            rounded-xl
            px-3
            py-2
            cursor-pointer

            flex
            items-center
            justify-between

            transition

            {{ trim($currentVariant) }}
            {{ trim($currentColor['focus']) }}
        "

    >

        <span

            class="
                text-sm
                text-slate-700
                dark:text-slate-200
            "

            x-text="value || 'Select date'"

        ></span>

        <svg

            xmlns="http://www.w3.org/2000/svg"

            width="18"

            height="18"

            fill="none"

            stroke="currentColor"

            stroke-width="2"

            viewBox="0 0 24 24"

            class="text-slate-400"

        >

            <path d="M8 2v4"/>

            <path d="M16 2v4"/>

            <rect
                x="3"
                y="4"
                width="18"
                height="18"
                rx="2"
            />

            <path d="M3 10h18"/>

        </svg>

    </button>

    <input

        type="hidden"

        name="{{ $name }}"

        :value="value"

    >

    <div

        x-show="open"

        x-transition

        @click.outside="open=false"

        class="
            absolute
            left-0
            mt-2
            w-full

            rounded-xl

            
            p-4
            
            shadow-lg
            
            z-50
            {{ $currentCalendar }}
            {{-- border

            border-slate-200
            dark:border-slate-700

            dark:bg-slate-900 --}}
        "

    >

        <div

            class="
                mb-4
                flex
                items-center
                justify-between
            "

        >

            <button

                @click="prev()"

                class="
                    h-8
                    w-8
                    rounded-lg
                    transition
                    cursor-pointer

                    {{ trim($currentColor['hover']) }}
                "

            >

                ←

            </button>

            <div

                class="
                    font-medium
                    text-slate-700
                    dark:text-slate-200
                "

                x-text="monthNames[month]+' '+year"

            ></div>

            <button

                @click="next()"

                class="
                    h-8
                    w-8
                    rounded-lg
                    transition
                    cursor-pointer

                    {{ trim($currentColor['hover']) }}
                "

            >

                →

            </button>

        </div>

        <div

            class="
                mb-2
                grid
                grid-cols-7
                text-center
                text-xs
                text-slate-400
            "

        >

            <div>Su</div>
            <div>Mo</div>
            <div>Tu</div>
            <div>We</div>
            <div>Th</div>
            <div>Fr</div>
            <div>Sa</div>

        </div>

        <div

            class="
                grid
                grid-cols-7
                gap-1
            "

        >

            <template x-for="day in daysInMonth">

                <button

                    type="button"

                    @click="select(day)"

                    class="
                        h-9
                        rounded-lg
                        text-sm
                        transition

                        {{ trim($currentColor['hover']) }}
                    "

                    :class="selected==day
                        ? '{{ trim($currentColor['selected']) }}'
                        : 'text-slate-700 dark:text-slate-200'"

                    x-text="day"

                ></button>

            </template>

        </div>

    </div>

</div>