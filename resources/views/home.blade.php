@extends('layout.app')

@section('title')
    Home
@endsection

@section ('content')
    <div class="container overflow-hidden text-center">
      <div class="row">
        <div class="col-6 text-light">
         <div class="p-3 border bg-primary mt-3"> 10 Barang <i class="fa-solid fa-boxes"></i> </div>
        </div>
        <div class="col-6 text-light">
         <div class="p-3 border bg-primary mt-3"> 15 Kategori <i class="fa-solid fa-tag"></i> </div>
         </div>
        <div class="col-6 text-light">
         <div class="p-3 border bg-primary mt-4"> 5 Suplier <i class="fa-solid fa-truck"></i> </div>
         </div>
        <div class="col-6 text-light">
         <div class="p-3 border bg-primary mt-4"> 30 Member <i class="fa-solid fa-user"></i> </div>
        </div>
</div>  
@endsection