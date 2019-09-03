<!DOCTYPE html>
    <html>
        <head>
            <title>Record System</title>
            <style>
                div.login{
                    text-align: center;
                    margin-top: 50px;
                }
                div.History{
                    text-align: center;
                    margin-top: 50px;
                }
                div.record{
                   text-align: center;
                    margin-top: 50px;
                }
            </style>
        </head>

        <body>
            
            {{-- <div class="login">
                Please <a href="/login" >LOGIN</a> first.
            </div> --}}
            @if($user->priority == 1)
            <div class="History">
                <table>
                    @foreach($records as $record)
                    <tr>
                        <th>{{$record->rstu_id}}</th>
                        <th>{{$record->time_stamp}}</th>
                    </tr>
                    @endforeach
                </table>
                
            </div>
            @elseif($user->priority == 2)
            <div class="record">
                <a onclick="Alert()" href={{action('RecordController@CheckIn') }}>打卡</a>
            </div>
            @endif

        </body>
        <script>
            function Alert(){
                alert("打卡完成！");
                window.location = '/Record';
            }
        </script>
    </html>