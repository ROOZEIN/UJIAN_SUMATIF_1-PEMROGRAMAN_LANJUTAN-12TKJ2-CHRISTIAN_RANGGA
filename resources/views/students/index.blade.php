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