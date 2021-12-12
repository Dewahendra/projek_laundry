<template>
   <div class="container-fluid">
        <div class="row justify-content-center mt-5">
          <div class="col-md-10">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Pemilik Toko</h3>
              </div>
              <div class="card-body">
                <table class="table table-bordered text-center">
                  <thead>
                    <tr>
                      <th>Email</th>
                      <th>Nama</th>
                      <th>Nama_Toko</th>
                      <th>Alamat</th>
                      <th>No_Telepon</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="item in pemilik_tokos" :key="item.id">
                    <td> {{item.Email}} </td>
                    <td> {{item.Nama}} </td>
                    <td> {{item.Nama_Toko}} </td>
                    <td> {{item.Alamat}} </td>
                    <td> {{item.No_Telepon}} </td>
                    <td>Edit | Hapus</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
   </div>
</template>

<script>
    export default {
       data() {
    return {
      pemilik_tokos: {}
    };
    },
     methods: {
    loadData(){
     axios.get("api/pemilik_toko").then(({ data }) => (this.pemilik_tokos = data));   
    }
    },
    created(){
        this.loadData();
    }
    }
</script>
