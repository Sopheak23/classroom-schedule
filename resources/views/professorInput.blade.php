@extends('layouts.app')

@section('content')
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
                          <h2>Professor's Input</h2>
                        </header>
                        <table id="customers">
                            <tr>
                            <th>Time</th>
                            <th>Monday</th>
                            <th>Tuesday</th>
                            <th>Wednesday</th>
                            <th>Thursday</th>
                            <th>Friday</th>
                            <th>Saturday</th>
                            </tr>
                            <tr>
                            <td colspan="7" bgcolor="#c1c1c1" align="middle">Morning</td>
                            </tr>
                            <tr>
                            <td>7:00-8:00</td>
                            <td onclick="openForm()"></td>
                            <td onclick="openForm()"></td>
                            <td onclick="openForm()"></td>
                            <td onclick="openForm()"></td>
                            <td onclick="openForm()"></td>
                            <td onclick="openForm()"></td>
                            </tr>

                            <div class="form-popup" id="myForm">
                                <form action="/action_page.php" class="form-container">
                                <h1>Input Subject</h1>

                                <label><b>Subject</b></label>
                                <input type="text" placeholder="Enter Subject" name="email" required>

                                <label><b>Department</b></label>
                                <input type="text" placeholder="Enter Department" name="psw" required>

                                <button type="submit" class="btn">Save</button>
                                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                                </form>
                            </div>

                            <script>
                            function openForm() {
                                document.getElementById("myForm").style.display = "block";
                            }

                            function closeForm() {
                                document.getElementById("myForm").style.display = "none";
                            }
                            </script>

                            <tr>
                            <td>8:00-9:00</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            </tr>
                            <tr>
                            <td>9:00-10:00</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            </tr>
                            <tr>
                            <td>10:00-11:00</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            </tr>
                            <tr>
                            <td>11:00-12:00</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            </tr>
                            <tr>
                            <td colspan="7" bgcolor="#c1c1c1" align="middle">Noon</td>
                            </tr>
                            <tr>
                            <td>13:00-14:00</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            </tr>
                            <tr>
                            <td>14:00-15:00</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            </tr>
                            <tr>
                            <td>15:00-16:00</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            </tr>
                            <tr>
                            <td>16:00-17:00</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            </tr>
                            <tr>
                            <td colspan="7" bgcolor="#c1c1c1" align="middle">Night</td>
                            </tr>
                            <tr>
                            <td>17:00-18:00</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            </tr>
                            <tr>
                            <td>18:00-19:00</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            </tr>
                            <tr>
                            <td>19:00-20:00</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            </tr>
                            <tr>
                            <td>20:00-21:00</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
