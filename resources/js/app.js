require('./bootstrap');

require('alpinejs');

import { templateSettings } from 'lodash';
import Swal from 'sweetalert2';

window.areSure = function(id) {
    Swal.fire({
        icon: 'warning',
        text: 'Do you really want to delete this data?',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete',
        confirmButtonColor: '#e3342f',
    }).then((result) => {
        if (result.isConfirmed) {
            deleteItem(id)
        }
    });
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
    })
}
