// resources/js/task-logic.js atau public/js/task-logic.js

document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('search-input');
    const searchForm = document.getElementById('search-form');
    const clearBtn = document.getElementById('clear-search');
    let timeout = null;

    // Pastikan elemen ada di halaman sebelum memasang listener
    if (searchInput && searchForm && clearBtn) {
        
        // Logika Live Search
        searchInput.addEventListener('keyup', function() {
            // Tampilkan/Sembunyikan tombol X
            if (this.value.length > 0) {
                clearBtn.classList.remove('hidden');
            } else {
                clearBtn.classList.add('hidden');
            }

            clearTimeout(timeout);
            timeout = setTimeout(function() {
                searchForm.submit();
            }, 700);
        });

        // Logika Tombol X Klik
        clearBtn.addEventListener('click', function() {
            searchInput.value = ''; 
            searchForm.submit(); 
        });
    }
});