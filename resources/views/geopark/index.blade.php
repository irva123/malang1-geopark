@extends('layout-admin.main')

@section('judul')
Tables
@endsection

@section('title')
Table Mobil
@endsection

@section('highlight2')
active
@endsection

@section('navbar')
<div class="container-fluid py-4 px-5">
      <div class="row">
        <div class="col-12">
          <div class="card card-background card-background-after-none align-items-start mt-1 mb-1">
            <div class="full-background" style="background: linear-gradient(90deg, #0A7AFE -1.83%, #13FFE3 52.33%, rgba(15, 14, 14, 0.3) 100%);"></div>
            <div class="card-body text-start p-4 w-100">
              <h3 class="text-white mb-2">Malang Geopark Information Sistem 🔥</h3>
              <p class="mb-4 font-weight-semibold">
              Badan Perencanaan Pembangunan Daerah Kabupaten Malang
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card border shadow-xs mb-4">
            <div class="card-header border-bottom pb-0">
              <div class="d-sm-flex align-items-center">
                <div>
                  <h6 class="font-weight-semibold text-lg mb-0">List Geopark</h6>
                </div>
                <div class="ms-auto d-flex">
                  {{-- tombol Ekspor PDF --}}
                  <form action="{{route('create-pdf')}}"class="d-inline">
                    <button class="btn btn-outline-info  btn-icon-split">
                      <span class="icon text-white-50">
                        <i class="fas fa-download"></i>
                      </span>
                      <span class="text">Ekspor Data (PDF)</span>
                    </button>
                  </form>
                </div>
              </div>
            </div>
            <div class="card-body px-0 py-0">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0" id="myTable">
                  <thead class="bg-gray-100">
                    <tr>
                      <th class="text-secondary text-xs font-weight-semibold opacity-7">No</th>
                      <th class="text-secondary text-xs font-weight-semibold opacity-7">Nama</th>
                      <th class="text-secondary text-xs font-weight-semibold opacity-7">Foto</th>
                      <th class="text-secondary text-xs font-weight-semibold opacity-7">Deskripsi</th>
                      <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Alamat</th>
                      <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Titik koordinat</th>
                      <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">link maps</th>
                      <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Operasional</th>
                      <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Harga Weekday</th>
                      <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Harga Weekend</th>
                      <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Kontak</th>
                      <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Sosial Media</th>
                      <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Marker</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @if ($spaces->count() > 0)
                    @foreach ($spaces as $space)
                    <tr>
                      <td class="align-middle text-center text-sm">
                        <p class="text-sm text-dark font-weight-semibold mb-0">{{ ++$i }}</p>
                      </td>
                    <td class="align-middle text-center text-sm">
                        <p class="text-sm text-dark font-weight-semibold mb-0">{{ $space->nama}}</p>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-sm font-weight-normal"><img src ="{{ url('storage/'.$space->foto) }}" alt ="" style="width: 150px;"></span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-sm text-dark font-weight-semibold mb-0">{{ $space->deskripsi}}</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-sm text-dark font-weight-semibold mb-0">{{ $space->alamat}}</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-sm text-dark font-weight-semibold mb-0"> {{ $space->titik_koordinat}}</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-sm text-dark font-weight-semibold mb-0"> {{ $space->link_maps}}</p>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-sm font-weight-normal">{{ $space->jam_buka}}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-sm font-weight-normal"> {{ $space->harga_weekday}}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-sm font-weight-normal"> {{ $space->harga_weekend}}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-sm font-weight-normal">{{ $space->kontak}}</span>
                      </td>
                      <td class="align-middle text-center">
                      <span class="text-secondary text-sm font-weight-normal">{{ $space->sosmed}}</span>
                      </td>
                      <td class="align-middle text-center">
                      <span class="text-secondary text-sm font-weight-normal">{{ $space->marker->marker}}</span>
                      </td>
                      <td class="align-middle text-center">
                      </td>
                    </tr>
                    @endforeach
                    @endif
                  </tbody>
                </table>
              </div>
              <div class="border-top py-3 px-3 d-flex align-items-center">
              </div>
            </div>
          </div>
        </div>
      </div>
    @endsection