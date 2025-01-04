
import { toast } from 'vue3-toastify';
import 'vue3-toastify/dist/index.css';

export function successToast(message) {
    toast.success(message, {
        theme: "colored",
        position: "top-center",
        hideProgressBar: true,
        transition: "slide",
        dangerouslyHTMLString: true
    });
}

export function errorToast(message) {
    toast.error(message, {
        theme: "colored",
        position: "top-center",
        hideProgressBar: true,
        transition: "slide",
        dangerouslyHTMLString: true
    });
}
