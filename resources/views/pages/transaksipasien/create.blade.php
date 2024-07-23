@extends('layout.default')

@section('content')
<div class="card">
    <div class="card-header">
        <strong>Tambah Transaksi Pasien</strong>
    </div>
    <div class="card-body card-block">
        <form action="{{ route('transaksipasien.store') }}" method="POST">
            @csrf

            {{-- Pasien --}}
            <div class="form-group">
                <label for="pasien_id" class="form-control-label">Nama Pasien</label>
                <select name="pasien_id" id="pasien_id" class="form-control @error('pasien_id') is-invalid @enderror">
                    <option value="">Pilih Pasien</option>
                    @foreach($pasiens as $pasien)
                        <option value="{{ $pasien->id }}" 
                            {{ old('pasien_id') == $pasien->id ? 'selected' : '' }}>
                            {{ $pasien->nama }}
                        </option>
                    @endforeach
                </select>
                @error('pasien_id')
                    <div class="text-muted">{{ $message }}</div>
                @enderror
            </div>

            {{-- Tanggal --}}
            <div class="form-group">
                <label for="tanggal" class="form-control-label">Tanggal</label>
                <input type="date" name="tanggal" id="tanggal" 
                    value="{{ old('tanggal') }}" 
                    class="form-control @error('tanggal') is-invalid @enderror">
                @error('tanggal')
                    <div class="text-muted">{{ $message }}</div>
                @enderror
            </div>

            {{-- Data Tindakan --}}
            <div class="form-group">
                <label for="data_tindakan_id" class="form-control-label">Tindakan</label>
                <select name="data_tindakan_id" id="data_tindakan_id" class="form-control @error('data_tindakan_id') is-invalid @enderror">
                    <option value="">Pilih Tindakan</option>    
                    @foreach($dataTindakan as $tindakan)
                        <option value="{{ $tindakan->id }}" 
                            {{ old('data_tindakan_id') == $tindakan->id ? 'selected' : '' }}>
                            {{ $tindakan->nama_tindakan }}
                        </option>
                    @endforeach
                </select>
                @error('data_tindakan_id')
                    <div class="text-muted">{{ $message }}</div>
                @enderror
            </div>


            {{-- Obat --}}
            <div class="form-group">
                <label for="obat_id" class="form-control-label">Obat</label>
                <select name="obat_id" id="obat_id" class="form-control @error('obat_id') is-invalid @enderror">
                    <option value="">Pilih Obat</option>    
                    @foreach($obat as $o)
                        <option value="{{ $o->id }}" 
                            {{ old('obat_id') == $o->id ? 'selected' : '' }}>
                            {{ $o->nama_obat }}
                        </option>
                    @endforeach
                </select>
                @error('obat_id')
                    <div class="text-muted">{{ $message }}</div>
                @enderror
            </div>

            {{-- Total Biaya --}}
            <div class="form-group">
                <label for="total_biaya" class="form-control-label">Total Biaya</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Rp</span>
                    </div>
                    <input type="number" name="total_biaya" id="total_biaya" 
                        value="{{ old('total_biaya') }}" 
                        class="form-control @error('total_biaya') is-invalid @enderror">
                </div>
                @error('total_biaya')
                    <div class="text-muted">{{ $message }}</div>
                @enderror
            </div>

            {{-- Button --}}
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">
                    Tambah
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
