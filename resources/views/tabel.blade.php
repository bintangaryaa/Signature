<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <h1 class='mt-5'>Tabel</h1>
        <form class='mt-2'>
            <div class='mb-2'>
                <label> Pilih Kategori </label>
                <select id="selectKategori" class='form-select' aria-label="Default select example"></select>
            </div>
            <div class='mb2'>
                <label> Pilih Kategori </label>
                <select id="selectKategori" class="form-select" aria-label="Default select example"></select>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK3V5ZxF4N37j1K5Rxg6g71aP5XlF+P0p3Y1k8rYlEyRcb" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UOaE9e3gkKtz4/cH/jjturQfC3u4Um3uHnlHjF8CBU/j7V4J0ZRtQ4S7jzX15F3k" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfyyB+7l88PZ0rT6swScQxN2j6DQ5xQK0ePh/tDQf5Mo6f9mU20Mbv8fFfF+r4E" crossorigin="anonymous"></script>
   
   <script>
        $(document).ready(function(){
            $("#selectTabel").select2({
                placeholder:'Pilih Kategori',
                ajax: {
                    url: ""
                }
            });
        });
        </script>


</body>

