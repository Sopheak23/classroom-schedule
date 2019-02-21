@extends('layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div id="container" style="height:100%;">
                        <header>
                            <h2>Room A1</h2>
                        </header>
                        <table class="table table-bordered">
                            <thead>
                                <th id="time" colspan="8">Morning</th>
                                <tr>
                                    @if (count($days)>0)
                                        @foreach ($days as $day)
                                        <th scope="col">{{$day->day_name}}</th>
                                        @endforeach
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">7:00-8:00</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                            <tbody>
                                <th id="time" colspan="8">Noon</th>
                                <tr>
                                    <th scope="row">1:00-2:00</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                            <tbody>
                                <th id="time" colspan="8">Evening</th>
                                <tr>
                                    <th scope="row">6:00-7:00</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        <div id="myModal" class="popup">

                            <!-- Modal content -->
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="name" class="form-control" id="name" placeholder="name">
                                </div>
                                <div class="form-group">
                                    <label for="inputDepartemnt">Faculty</label>
                                    <select class="form-control" id="faculty">
                                       
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="fac">Department</label>
                                    <select class="form-control" id="department">

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="fac">Subject</label>
                                    <select class="form-control" id="Subject">

                                    </select>
                                </div>
                                <button type="submit" id="submit" class="btn btn-primary">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        var td = '';
        $.ajaxSetup({

            headers: {

                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

            }

        });
        // submit
        $('#submit').click(function() {
            var facultyID = $('#faculty').val();
            var fepartmentID = $('#department').val();
            $.ajax({
                type: "POST",
                url: "inputData",
                data: {
                    fid: facultyID,
                    did: fepartmentID
                },
                success: function(response) {
                    alert(response);
                }
            });
        });
        $('#faculty').on('change', function() {
            $.ajax({
                type: "GET",
                url: 'Department/{id}',
                data: {
                    id: $(this).val()
                },
                success: function(response) {
                    $('#department').html(response);
                }
            });
        });
        var modal = document.getElementById('myModal');
        var span = document.getElementsByClassName("close")[0];
        $('td').click(function() {
            td = $(this);
            $.ajax({
                type: "GET",
                url: "faculty",
                success: function (response) {
                    $('#faculty').html(response);
                }
            });
            $.ajax({
                type: "GET",
                url: 'Department/{id}',
                data: {
                    id: 1
                },
                success: function(response) {
                    $('#department').html(response);
                }
            });
            modal.style.display = "block";
        });

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    });
</script>
@endsection