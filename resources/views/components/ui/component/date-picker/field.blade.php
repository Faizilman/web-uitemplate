@props([
    'label' => 'Date',
    'name' => 'date',
    'color' => 'primary',
    'variant' => 'solid'
])

@php

$colors = [

    'primary' => [
        'segment' => '
            bg-blue-600 text-white
            dark:bg-blue-500 dark:text-white
        ',
        'border' => '
            focus-within:border-blue-600
            dark:focus-within:border-blue-500
        ',
        'text' => '
            focus:text-blue-600
            dark:focus:text-blue-400
        ',
        'icon' => '
            group-focus-within:text-blue-600
            dark:group-focus-within:text-blue-400
        ',
    ],

    'tertiary' => [
        'segment' => '
            bg-zinc-100 text-zinc-800
            dark:bg-zinc-700 dark:text-zinc-100
        ',
        'border' => '
            focus-within:border-zinc-500
            dark:focus-within:border-zinc-400
        ',
        'text' => '
            focus:text-zinc-700
            dark:focus:text-zinc-200
        ',
        'icon' => '
            group-focus-within:text-zinc-700
            dark:group-focus-within:text-zinc-200
        ',
    ],

    'info' => [
        'segment' => '
            bg-cyan-500 text-white
        ',
        'border' => '
            focus-within:border-cyan-500
        ',
        'text' => '
            focus:text-cyan-500
            dark:focus:text-cyan-400
        ',
        'icon' => '
            group-focus-within:text-cyan-500
            dark:group-focus-within:text-cyan-400
        ',
    ],

    'warning' => [
        'segment' => '
            bg-amber-400 text-white
        ',
        'border' => '
            focus-within:border-amber-500
        ',
        'text' => '
            focus:text-amber-600
            dark:focus:text-amber-400
        ',
        'icon' => '
            group-focus-within:text-amber-600
            dark:group-focus-within:text-amber-400
        ',
    ],

];

$variants = [

    'soft' => '
        bg-white
        border
        border-zinc-200
        rounded-xl

        dark:bg-zinc-900
        dark:border-zinc-700
    ',

    'line' => '
        bg-white
        border-0
        border-b
        border-zinc-600
        rounded-none
        dark:bg-[#010101]
        dark:border-zinc-800
    ',

];


$currentColor = $colors[$color] ?? $colors['primary'];

$currentVariant = $variants[$variant] ?? $variants['solid'];


@endphp


<div
    x-data="{

        day:'',
        month:'',
        year:'',
        focused:null,

        placeholder(type){
            return {
                day:'hh',
                month:'bb',
                year:'tttt'
            }[type]
        },

        focusAll(ref){
            this.$nextTick(()=>{
                this.$refs[ref].focus();
                this.$refs[ref].select();
            });
        },

        startEdit(){
            this.focusAll('day');
        },

        daysInMonth(month,year){

            if(!month) return 31;

            year = year || 2000;

            return new Date(year,month,0).getDate();

        },

        validateMonth(){

            if(this.month.length != 2) return;

            let m = parseInt(this.month);

            if(m < 1){
                this.month = '01';
            }

            if(m > 12){
                this.month = '12';
            }

            this.validateDay();

        },

        validateDay(){

            if(this.day.length != 2) return;

            let d = parseInt(this.day);

            let m = parseInt(this.month) || 1;

            let y = parseInt(this.year) || 2000;

            let max = this.daysInMonth(m,y);

            if(d < 1){
                this.day = '01';
            }

            if(d > max){
                this.day = String(max).padStart(2,'0');
            }

        },

        onInput(type,max,next=null){

            this[type] = this[type]
                .replace(/\D/g,'')
                .substring(0,max);

            if(type==='month'){
                this.validateMonth();
            }

            if(type==='day'){
                this.validateDay();
            }

            if(type==='year' && this.year.length===4){
                this.validateDay();
            }

            if(this[type].length===max && next){
                this.focusAll(next);
            }

        },

        get value(){

            if(
                this.day.length===2 &&
                this.month.length===2 &&
                this.year.length===4
            ){
                return `${this.year}-${this.month}-${this.day}`;
            }

            return '';

        }

    }"

    class="w-full"
>

    <div class="flex flex-col gap-1.5">

        <label class="text-xs font-medium text-slate-500 dark:text-slate-400">
            {{ $label }}
        </label>

        <div
            class="
                group
                flex
                items-center
                
                border
                border-slate-200
                px-2
                py-1.5
                shadow-sm
                transition

                {{ trim($currentVariant) }}
                {{ trim($currentColor['border']) }}
            "
        >

            <input
                x-ref="day"
                x-model="day"
                maxlength="2"
                inputmode="numeric"
                @focus="focused='day'"
                @input="onInput('day',2,'month')"
                :placeholder="placeholder('day')"
                :class="focused==='day' ? '{{ trim($currentColor['segment']) }}' : ''"
                class="
                    w-8
                    rounded
                    bg-transparent
                    text-center
                    outline-none
                    transition
                    placeholder:text-slate-400
                    dark:placeholder:text-slate-500
                    text-sm

                    {{ trim($currentColor['text']) }}
                "
            >

            <span class="mx-1 text-slate-400">/</span>

            <input
                x-ref="month"
                x-model="month"
                maxlength="2"
                inputmode="numeric"
                @focus="focused='month'"
                @input="onInput('month',2,'year')"
                :placeholder="placeholder('month')"
                :class="focused==='month' ? '{{ trim($currentColor['segment']) }}' : ''"
                class="
                    w-8
                    rounded
                    bg-transparent
                    text-center
                    outline-none
                    transition
                    placeholder:text-slate-400
                    dark:placeholder:text-slate-500
                    text-sm
                    {{ trim($currentColor['text']) }}
                "
            >

            <span class="mx-1 text-slate-400">/</span>

            <input
                x-ref="year"
                x-model="year"
                maxlength="4"
                inputmode="numeric"
                @focus="focused='year'"
                @input="onInput('year',4)"
                :placeholder="placeholder('year')"
                :class="focused==='year' ? '{{ trim($currentColor['segment']) }}' : ''"
                class="
                    w-12
                    rounded
                    bg-transparent
                    text-center
                    outline-none
                    transition
                    placeholder:text-slate-400
                    dark:placeholder:text-slate-500
                    text-sm
                    {{ trim($currentColor['text']) }}
                "
            >

            <div
                @click="startEdit()"
                class="
                    ml-auto
                    p-1
                    text-slate-400
                    transition
                    cursor-pointer
                    {{ trim($currentColor['icon']) }}
                "
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="18"
                    height="18"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                >
                    <path d="M8 2v4"/>
                    <path d="M16 2v4"/>
                    <rect x="3" y="4" width="18" height="18" rx="2"/>
                    <path d="M3 10h18"/>
                </svg>
            </div>

            <input
                type="hidden"
                name="{{ $name }}"
                :value="value"
            >

        </div>

    </div>

</div>
