<!DOCTYPE html>
<html>
    <head>
        <title>Provinsi & Kabupaten Kota di Indonesia</title>
        <meta id="token" name="token" content="{ { csrf_token() } }">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <div class="row col-sm-4 col-sm-offset-4 text-center">
                <h2>Provinsi & kota</h2>
                <hr>
                <form class="form-horizontal" actio="" method="POST">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <select class="form-control" id="provinsi_id" name="provinsi_id">
                                <option value='0'>provinsi</option>
                                @foreach ($data as $row)
                                <option value="{{ $row->id_prov }}">{{ $row->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            <select class="form-control" id="kota_id">
                                <option value='0'>kabupaten / kota</option>
                            </select>
                        </div>
                    </div>

                    <div id="ho"></div>

                </form>
            </div>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script type="text/javascript">
        $.ajaxSetup({
            headers: { 'X-CSRF-Token' : $('meta[name=token]').attr('content') }
        });

        $('#provinsi_id').change(function(){
            $id_prov = $(this).val();
            $.ajax({
                url: 'getkotabyid', 
                type: 'POST',
                data: { 'provinsi':$id_prov },
                success: function (data) {
                    $('#kota_id').html('');
                    $('#kota_id').append(data);
                }
            });
        });

        $(document).ready(function(){
        
        });
        </script>
    </body>
</html>
