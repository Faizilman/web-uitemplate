<<<<<<< HEAD
import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();
=======
import Alpine from 'alpinejs'

window.Alpine = Alpine

Alpine.start()

// Fungsi global — panggil setelah inject HTML baru ke DOM
window.initAlpine = () => {
    Alpine.initTree(document.body)
}
>>>>>>> master
