<template>
    <div class="container-fluid">
        <div class="row justify-content-center mt-2">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-center">
                            Data Pemilik Toko
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="card-tools">
                            <button
                                class="btn btn-info mb-2"
                                @click="showModal"
                            >
                                Tambah Data
                            </button>
                        </div>
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>No_Telepon</th>
                                    <th>Nama_Toko</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    v-for="item in pemilik_tokos"
                                    :key="item.id"
                                >
                                    <td>{{ item.Nama }}</td>
                                    <td>{{ item.Alamat }}</td>
                                    <td>{{ item.No_Telepon }}</td>
                                    <td>{{ item.Nama_Toko }}</td>
                                    <td>{{ item.Email }}</td>
                                    <td>{{ item.Password }}</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button
                                                @click="showModalEdit(item)"
                                                class="btn btn-primary"
                                            >
                                                Edit
                                            </button>
                                            <button
                                                @click="deleteData(item.id)"
                                                class="btn btn-danger"
                                            >
                                                Delete
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div
            class="modal fade"
            id="addmodal"
            tabindex="-1"
            role="dialog"
            aria-labelledby="addmodal"
            aria-hidden="true"
        >
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5
                            class="modal-title"
                            id="exampleModalLongTitle"
                            v-show="!statusmodal"
                        >
                            Tambah Data
                        </h5>
                        <h5
                            class="modal-title"
                            id="exampleModalLongTitle"
                            v-show="statusmodal"
                        >
                            Edit Data
                        </h5>
                        <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                        >
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form
                        @submit.prevent="statusmodal ? editData() : saveData()"
                    >
                        <div class="modal-body">
                            <div class="form-group">
                                <input
                                    type="text"
                                    v-model="form.Nama"
                                    class="form-control"
                                    placeholder="Nama"
                                    :class="{
                                        'is-invalid': form.errors.has('Nama'),
                                    }"
                                    required
                                />
                                <has-error
                                    :form="form"
                                    field="Nama"
                                ></has-error>
                            </div>
                            <div class="form-group">
                                <input
                                    type="text"
                                    v-model="form.Alamat"
                                    class="form-control"
                                    placeholder="Alamat"
                                    :class="{
                                        'is-invalid': form.errors.has('Alamat'),
                                    }"
                                    required
                                />
                                <has-error
                                    :form="form"
                                    field="Alamat"
                                ></has-error>
                            </div>
                            <div class="form-group">
                                <input
                                    type="number"
                                    v-model="form.No_Telepon"
                                    class="form-control"
                                    placeholder="No_Telepon"
                                    :class="{
                                        'is-invalid':
                                            form.errors.has('No_Telepon'),
                                    }"
                                    required
                                />
                                <has-error
                                    :form="form"
                                    field="No_Telepon"
                                ></has-error>
                            </div>
                            <div class="form-group">
                                <input
                                    type="text"
                                    v-model="form.Nama_Toko"
                                    class="form-control"
                                    placeholder="Nama_Toko"
                                    :class="{
                                        'is-invalid':
                                            form.errors.has('Nama_Toko'),
                                    }"
                                    required
                                />
                                <has-error
                                    :form="form"
                                    field="Nama_Toko"
                                ></has-error>
                            </div>
                            <div class="form-group">
                                <input
                                    type="email"
                                    v-model="form.Email"
                                    class="form-control"
                                    placeholder="Email"
                                    :class="{
                                        'is-invalid': form.errors.has('Email'),
                                    }"
                                    required
                                />
                                <has-error
                                    :form="form"
                                    field="Email"
                                ></has-error>
                            </div>
                            <div class="form-group">
                                <input
                                    type="password"
                                    v-model="form.Password"
                                    class="form-control"
                                    placeholder="Password"
                                    :class="{
                                        'is-invalid':
                                            form.errors.has('Password'),
                                    }"
                                    required
                                />
                                <has-error
                                    :form="form"
                                    field="Password"
                                ></has-error>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button
                                type="reset"
                                class="btn btn-secondary"
                                data-dismiss="modal"
                            >
                                Reset
                            </button>
                            <button
                                type="submit"
                                class="btn btn-primary"
                                v-show="!statusmodal"
                            >
                                Save
                            </button>
                            <button
                                type="submit"
                                class="btn btn-primary"
                                v-show="statusmodal"
                            >
                                Ubah
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            pemilik_tokos: {},
            statusmodal: false,
            form: new Form({
                id: "",
                Nama: "",
                Alamat: "",
                No_Telepon: "",
                Nama_Toko: "",
                Email: "",
                Password: "",
            }),
        };
    },
    methods: {
        showModal() {
            this.statusmodal = false;
            this.form.reset();
            $("#addmodal").modal("show");
        },
        showModalEdit(item) {
            this.statusmodal = true;
            this.form.reset();
            $("#addmodal").modal("show");
            this.form.fill(item);
        },
        loadData() {
            axios
                .get("api/pemilik_toko")
                .then(({ data }) => (this.pemilik_tokos = data));
        },
        saveData() {
            this.form
                .post("api/pemilik_toko")
                .then(() => {
                    Fire.$emit("refreshData");
                    $("#addmodal").modal("hide");
                    Toast.fire({
                        icon: "success",
                        title: "Data Berhasil Tersimpan",
                    });
                })
                .catch();
        },
        editData() {
            this.form
                .put("api/pemilik_toko/" + this.form.id)
                .then(() => {
                    Fire.$emit("refreshData");
                    $("#addmodal").modal("hide");
                    Toast.fire({
                        icon: "success",
                        title: "Data Berhasil Terupdate",
                    });
                })
                .catch();
        },
        deleteData(id) {
            Swal.fire({
                title: "Anda Yakin Ingin Menghapus Data Ini ?",
                text: "Klik Batal Untuk Membatalkan Penghapusan",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Hapus",
            }).then((result) => {
                if (result.value) {
                    this.form
                        .delete("api/pemilik_toko/" + id)
                        .then(() => {
                            Swal.fire(
                                "Terhapus",
                                "Data Anda Sudah Tehapus",
                                "success"
                            );
                            Fire.$emit("refreshData");
                        })
                        .catch(() => {
                            Swal.fire(
                                "Gagal",
                                "Data Gagal Terhapus",
                                "warning"
                            );
                        });
                }
            });
        },
    },
    created() {
        this.loadData();
        Fire.$on("refreshData", () => {
            this.loadData();
        });
    },
};
</script>
