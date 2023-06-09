@extends('Dashboard.layouts.app')
@section('content')

<header class="bg-white shadow-sm px-4 py-3 z-index-20">
    <div class="container-fluid px-0">
      <h2 class="mb-0 p-1">Perumahan</h2>
    </div>
  </header>
  <!-- Dashboard Counts Section-->
  <section class="pb-0">
    <div class="container-fluid">
      <div class="card mb-0">
        <div class="card-body">
        <h3>Tambah Perumahan</h3>
          <div class="row p-2">
            <form>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label" for="exampleInputEmail1">Nama Perumahan</label>
                            <input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Nama Perumahan" required>
                          </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label" for="exampleInputEmail1">Image Perumahan</label>
                            <input class="form-control" id="exampleInputEmail1" type="file" accept=".jpg, .png" aria-describedby="emailHelp" placeholder="Nama Perumahan" required>
                          </div>
                    </div>
                </div>    
                <div class="mb-3">
                  <label class="form-label" for="exampleInputEmail1">Deskripsi Perumahan</label>
                  <input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Nama Perumahan" required>
                </div>
              
                <button class="btn btn-primary" type="submit">Submit</button>
              </form>
        </div>
      </div>
    </div>
  </section>


  @endsection