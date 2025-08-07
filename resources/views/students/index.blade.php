<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
<title>Daftar Siswa</title>
  <!-- <style>
    /* Layout utama */
    .layout {
      width: 90%;
      max-width: 800px;
      margin: 30px auto;
      padding: 20px;
      border: 2px solid #ccc;
      border-radius: 10px;
    }

    /* Baris siswa (grid sederhana) */
    .siswa-container {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: space-between;
    }

    /* Kartu siswa */
    .siswa-card {
      width: 45%;
      border: 1px solid #ccc;
      border-radius: 10px;
      padding: 15px;
      box-sizing: border-box;
    }

    /* Avatar lingkaran */
    .avatar {
      width: 50px;
      height: 50px;
      background-color: #ddd;
      border-radius: 50%;
      display: inline-block;
      vertical-align: middle;
    }

    /* Info siswa */
    .siswa-info {
      display: inline-block;
      margin-left: 10px;
      vertical-align: middle;
    }

    .siswa-info h4 {
      margin: 0;
      font-size: 16px;
    }

    .siswa-info p {
      margin: 2px 0;
      font-size: 13px;
      color: gray;
    }

    /* Deskripsi */
    .deskripsi {
      margin-top: 10px;
      font-size: 14px;
    }
  </style> -->
</head>
<body>

  <!-- <div class="layout">
    <h2>Daftar Siswa</h2>

    <div class="siswa-container">

      Siswa 1
      <div class="siswa-card">
        <div class="siswa-header">
          <span class="avatar"></span>
          <div class="siswa-info">
            <h4>Nama Siswa 1</h4>
            <p>@username_siswa</p>
          </div>
        </div>
        <div class="deskripsi">
          Deskripsi singkat siswa
        </div>
      </div>

      Siswa 2
      <div class="siswa-card">
        <div class="siswa-header">
          <span class="avatar"></span>
          <div class="siswa-info">
            <h4>Nama Siswa 2</h4>
            <p>@username_siswa</p>
          </div>
        </div>
        <div class="deskripsi">
          Deskripsi singkat siswa
        </div>
      </div>

      Siswa 3
      <div class="siswa-card">
        <div class="siswa-header">
          <span class="avatar"></span>
          <div class="siswa-info">
            <h4>Nama Siswa 3</h4>
            <p>@username_siswa</p>
          </div>
        </div>
        <div class="deskripsi">
          Deskripsi singkat siswa
        </div>
      </div>

      Siswa 4
      <div class="siswa-card">
        <div class="siswa-header">
          <span class="avatar"></span>
          <div class="siswa-info">
            <h4>Nama Siswa 4</h4>
            <p>@username_siswa</p>
          </div>
        </div>
        <div class="deskripsi">
          Deskripsi singkat siswa
        </div>
      </div>

    </div>
  </div>
</div> -->

<div class="layout">
    <h2 class="text-2xl font-bold mb-6 text-center">Daftar Siswa</h2>
    <div class="siswa-container grid grid-cols-1 md:grid-cols-2 gap-6">
      @foreach($students as $student)
      <div class="siswa-card bg-white rounded-2xl shadow-md p-8 flex flex-col items-center text-center">
        <img class="w-24 h-24 rounded-full object-cover border-2 borde0 mb-4">
        <p class="text-gray-400 text-xs mb-1"></p>
        <h4 class="text-xl font-bold mb-1">{{ $student['nama'] }}</h4>
        <p class="text-gray-600 text-sm mb-2">{{ $student['kelas'] }} | {{ $student['hobi'] }}</p>
        <div class="deskripsi text-gray-500 mb-4 text-sm">
          {{ $student['deskripsi'] }}
        </div>
        <div class="flex gap-3 w-full justify-center">
          <a href="#" class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-4 py-2 rounded-lg text-sm font-semibold transition">Edit Profile</a>
          <a href="#" class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-4 py-2 rounded-lg text-sm font-semibold transition">Delete Account</a>
        </div>
      </div>
      @endforeach
    </div>
</div>
</body>
</html>