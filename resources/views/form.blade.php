<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form-Kesehatan</title>
 
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body  style="background-color: currentColor">
        <div class="container" style="color: white">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card mt-5" style="font-size: 15pt; font-weight:bold">
                        <div class="card-body"  style="background-color:dimgray">
                            <h3 class="text-center">Formulir Rekam Medis Pasien</h3>
                              <!-- form validasi -->
                              <form action="/rekammedis" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                    <div class="form-group">
                                            <label for="pasien">Nama Pasien</label>
                                            <input class="form-control" type="dropdown" name="pasien" value="{{ old('pasien') }}" class="@error('pasien') is-invalid @enderror">
                                            @error('pasien')
                                                       <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                               <label for="dokter">Nama Dokter</label>
                                               <input class="form-control" type="dropdown" name="dokter" value="{{ old('dokter') }}" class="@error('dokter') is-invalid @enderror">
                                                @error('dokter')
                                                         <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                        <div class="form-group">
                                               <label for="kondisi">Kondisi Kesehatan</label>
                                               <input class="form-control" type="text" name="kondisi" value="{{ old('kondisi') }}" class="@error('kondisi') is-invalid @enderror">
                                               @error('kondisi')
                                                          <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="suhu">Suhu Tubuh (Celcius)</label>
                                            <input class="form-control" type="text" name="suhu" value="{{ old('suhu') }}" class="@error('suhu') is-invalid @enderror">
                                            @error('suhu')
                                                       <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="resep">Resep Obat</label>
                                            <input type="file" class="form-control-file" id="resep" name="resep" value="{{ old('resep') }}" class="@error('resep') is-invalid @enderror">
                                            @error('resep')
                                                       <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                         <div class="form-group">
                                               <input class="btn btn-primary" type="submit" value="Valid" style="padding: 10px 24px; font-size:14pt;">
                                         </div>
                                        
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>