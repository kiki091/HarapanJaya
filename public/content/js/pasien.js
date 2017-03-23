
function crudPasien() {
    Vue.http.headers.common['X-CSRF-TOKEN'] = $("#_token").attr("value");

    var controller = new Vue({
    	el: '#app',
        data: {
            models: {
                id: '',
            	no_rim : '',
                no_kk : '',
                no_ktp : '',
                nama_lengkap : '',
                kategori_pasien : '',
                golongan_darah : '',
                jenis_kelamin : '',
                tempat_lahir : '',
                tanggal_lahir : '',
                alamat : '',
                kota : '',
                kecamatan : '',
                kelurahan : '',
                no_telpon : '',
                status : '',
                nama_ibu : '',
                nama_ayah : '',
            },
            form_add_title: "Form Data Pasien",
            id: '',
            edit: false,
            responseData: {},
        },
        methods: {

            fetchData: function(){
                
                this.$http.get('/dashboard/pasien/data', []).then(function (response) {
                    if(response.data.status == true) {
                        this.$set('responseData', response.data.data)
                    } else {
                        pushNotifMessage(response.data.status, response.data.message)
                    }
                })
            },
        },
        ready: function () {
            this.fetchData()
        }
    });
}
