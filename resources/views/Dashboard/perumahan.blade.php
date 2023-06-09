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
        <a href="/insert-perumahan" class="btn btn-primary"><i class="fa-solid fa-house"></i>   Tambah Perumahan</a>
          <div class="row p-2">
            <div class="table-responsive">
                <table class="table mb-0 table-striped table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Username</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th class="border-bottom-0" scope="row">3</th>
                      <td class="border-bottom-0">Larry</td>
                      <td class="border-bottom-0">the Bird</td>
                      <td class="border-bottom-0">@twitter</td>
                    </tr>
                  </tbody>
                </table>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  @endsection