
  <div class="w-full max-w-sm mx-auto font-sans p-2" 
       x-data="{ 
          month: '', 
          day: '', 
          year: '',
          // Fungsi untuk otomatis pindah ke input selanjutnya jika jumlah karakter maksimal terpenuhi
          checkLength(e, current, nextId) {
             // Izinkan backspace/delete agar tidak macet saat menghapus
             if (e.key === 'Backspace' || e.key === 'Delete') return;
             
             let el = e.target;
             if (el.value.length >= el.maxLength && nextId) {
                document.getElementById(nextId).focus();
                document.getElementById(nextId).select();
             }
          }
       }">
    
    <div class="group relative w-full flex flex-col justify-end min-h-[56px] px-3 py-2 bg-gray-100/70 hover:bg-gray-200/60 rounded-2xl border-2 border-transparent focus-within:border-blue-600 focus-within:bg-white focus-within:shadow-md focus-within:shadow-blue-50/50 transition-all duration-200 cursor-text"
         @click="$refs.monthInput.focus()"> <span class="absolute top-2 left-3 text-[11px] font-bold text-gray-400 group-focus-within:text-blue-600 uppercase tracking-wider transition-colors duration-200 block select-none">
        Tanggal Lahir
      </span>

      <div class="flex items-center text-sm font-bold text-gray-800 h-6 mt-4">
        
        <div class="relative inline-block px-1 rounded-md hover:bg-gray-200/80 group-focus-within:hover:bg-gray-100 transition-colors">
          <input 
            type="text" 
            id="mm"
            x-ref="monthInput"
            x-model="month"
            maxlength="2" 
            placeholder="mm" 
            @keyup="checkLength($event, 'mm', 'dd')"
            class="w-6 bg-transparent text-center outline-none uppercase placeholder-gray-400 focus:text-blue-600 font-semibold" 
          />
        </div>
        
        <span class="text-gray-400 px-0.5 select-none">/</span>
        
        <div class="relative inline-block px-1 rounded-md hover:bg-gray-200/80 group-focus-within:hover:bg-gray-100 transition-colors">
          <input 
            type="text" 
            id="dd"
            x-model="day"
            maxlength="2" 
            placeholder="dd" 
            @keyup="checkLength($event, 'dd', 'yyyy')"
            @keydown.backspace="if(day.length === 0) { $refs.monthInput.focus(); }"
            class="w-6 bg-transparent text-center outline-none uppercase placeholder-gray-400 focus:text-blue-600 font-semibold" 
          />
        </div>
        
        <span class="text-gray-400 px-0.5 select-none">/</span>
        
        <div class="relative inline-block px-1 rounded-md hover:bg-gray-200/80 group-focus-within:hover:bg-gray-100 transition-colors">
          <input 
            type="text" 
            id="yyyy"
            x-model="year"
            maxlength="4" 
            placeholder="yyyy" 
            @keydown.backspace="if(year.length === 0) { document.getElementById('dd').focus(); }"
            class="w-10 bg-transparent text-center outline-none uppercase placeholder-gray-400 focus:text-blue-600 font-semibold" 
          />
        </div>

        <div class="ml-auto text-gray-400 group-focus-within:text-blue-500 hover:text-gray-600 transition-colors duration-200 cursor-pointer p-1 rounded-lg hover:bg-gray-200/50">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <path d="M8 2v4"></path>
            <path d="M16 2v4"></path>
            <rect width="18" height="18" x="3" y="4" rx="2"></rect>
            <path d="M3 10h18"></path>
          </svg>
        </div>

      </div>
    </div>

    <div class="mt-4 p-3 bg-gray-800 text-white font-mono text-xs rounded-xl shadow-inner">
      <strong>Output Variabel:</strong> "year-month-day" -> <span class="text-emerald-400" x-text="year + '-' + month + '-' + day"></span>
    </div>

  </div>