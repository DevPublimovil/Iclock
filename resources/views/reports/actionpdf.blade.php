<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @page{
            margin: 0%;
            padding: 0%;
            text-transform: uppercase;
        }

        header{
            padding-top: 0.5cm;
            padding-left: 0.5cm;
            padding-right: 0.5cm;
        }

        main{
            padding-top: 0.5cm;
            padding-left: 0.5cm;
            padding-right: 0.5cm;
        }

        footer{
        }

        .negrita{
            font-weight: bold;
        }
        table{
            border-collapse: collapse;
            color: #212529;
        }
        .table{
            width: 100%;
            padding: 0%;
            text-align: center;
            margin-bottom: 0.50rem
        }

        .table th,
        .table td {
            padding: 0.75rem;
            vertical-align: top;
        }
        
        .column{
            border: 2px solid black;
            padding: 0%;
        }

        .text-left{
            text-align: left;
        }
        .text-right{
            text-align: right;
        }
        .text-center{
            text-align: center;
        }

        .acciones td{
            width: 33.3333333333%;
            padding: 3px;
        }
        .first-item{
            padding-left: 4px
        }
        .text-sm{
            font-size: 12px
        }
        .firma{
            position: relative;
        }
        .image_firma{
            width: 100%;
            height: 80px;
        }
    </style>
</head>
<body>
    <header>
        <table class="table negrita">
            <tr>
                <td class="column">PUBLIMOVIL, S.A. DE C.V.</td>
                <td class="column"><u>ACCION DE PERSONAL</u></td>
                <td class="column">RECURSOS HUMANOS</td>
            </tr>
        </table>
    </header>
    <main>
        <table class="table text-left">
            <thead>
                <tr>
                    <th colspan="2" class="text-center column">
                        I. DATOS GENERALES
                    </th>
                </tr>
            </thead>
            <tbody class="text-sm">
                <tr>
                    <td class="column"><strong>Fecha:</strong> {{\Carbon\Carbon::now()}}</td>
                    <td class="column"><strong>Codigo:</strong> p-57</td>
                </tr>
                <tr>
                    <td class="column"><strong>Nombre del empleado:</strong> {{$action->user->name}}</td>
                    <td class="column"><strong>Sueldo:</strong> ${{$action->salary}}</td>
                </tr>
                <tr>
                    <td class="column" colspan="2"><strong>Unidad a la que pertence:</strong> {{$action->user->employee->departament->name_departament}}</td>
                </tr>
                <tr>
                    <td class="column" colspan="2"><strong>Nombre del puesto:</strong> {{$action->user->employee->puesto}}</td>
                </tr>
            </tbody>
        </table>

        <table class="table text-left acciones">
            <thead>
                <tr>
                    <th colspan="3" class="column">
                        II. ACCIONES DE PERSONAL
                    </th>
                </tr>
            </thead>
            <tbody class="column text-sm">
                <tr>
                    <td>
                        <input type="checkbox" @foreach ($items as $item) @if ($item == $actions[0]) checked @endif @endforeach style="margin-top:5px"> {{$actions[0]}}
                    </td>
                    <td>
                        <input type="checkbox" @foreach ($items as $item) @if ($item == $actions[1]) checked @endif @endforeach style="margin-top:5px"> {{$actions[1]}}
                    </td>
                    <td>
                        <input type="checkbox" @foreach ($items as $item) @if ($item == $actions[2]) checked @endif @endforeach style="margin-top:5px"> {{$actions[2]}}
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" @foreach ($items as $item) @if ($item == $actions[3]) checked @endif @endforeach style="margin-top:5px"> {{$actions[3]}}
                    </td>
                    <td>
                        <input type="checkbox" @foreach ($items as $item) @if ($item == $actions[4]) checked @endif @endforeach style="margin-top:5px"> {{$actions[4]}}
                    </td>
                    <td>
                        <input type="checkbox" @foreach ($items as $item) @if ($item == $actions[5]) checked @endif @endforeach style="margin-top:5px"> {{$actions[5]}}
                    </td>
                </tr>
                <tr >
                    <td>
                        <input type="checkbox" @foreach ($items as $item) @if ($item == $actions[6]) checked @endif @endforeach style="margin-top:5px"> {{$actions[6]}}
                    </td>
                    <td>
                        <input type="checkbox" @foreach ($items as $item) @if ($item == $actions[7]) checked @endif @endforeach style="margin-top:5px"> {{$actions[7]}}
                    </td>
                    <td>
                        <input type="checkbox" @foreach ($items as $item) @if ($item == $actions[8]) checked @endif @endforeach style="margin-top:5px"> {{$actions[8]}}
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" @foreach ($items as $item) @if ($item == $actions[9]) checked @endif @endforeach style="margin-top:5px"> {{$actions[9]}}
                    </td>
                    <td>
                        <input type="checkbox" @foreach ($items as $item) @if ($item == $actions[10]) checked @endif @endforeach style="margin-top:5px"> {{$actions[10]}}
                    </td>
                    <td>
                        <input type="checkbox" @foreach ($items as $item) @if ($item == $actions[11]) checked @endif @endforeach style="margin-top:5px"> {{$actions[11]}}
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" @foreach ($items as $item) @if ($item == $actions[12]) checked @endif @endforeach style="margin-top:5px"> {{$actions[12]}}
                    </td>
                    <td>
                        <input type="checkbox" @foreach ($items as $item) @if ($item == $actions[13]) checked @endif @endforeach style="margin-top:5px"> {{$actions[13]}}
                    </td>
                    <td>
                        <input type="checkbox" @foreach ($items as $item) @if ($item == $actions[14]) checked @endif @endforeach style="margin-top:5px"> {{$actions[14]}}
                    </td>
                </tr>
               
                <tr>
                    <td>
                        <input type="checkbox" @foreach ($items as $item) @if ($item == $actions[15]) checked @endif @endforeach style="margin-top:5px"> {{$actions[15]}}
                    </td>
                    <td>
                        <input type="checkbox" @foreach ($items as $item) @if ($item == $actions[16]) checked @endif @endforeach style="margin-top:5px"> {{$actions[16]}}
                    </td>
                    <td>
                        <input type="checkbox" @foreach ($items as $item) @if ($item == $actions[17]) checked @endif @endforeach style="margin-top:5px"> {{$actions[17]}}
                    </td>
                </tr>
                @if($action->other_action != null)
                <tr>
                    <td colspan="3" class="text-left">
                        <p><strong>otros: </strong>{{$action->other_action}}</p>
                    </td>
                </tr>
                @endif
            </tbody>
        </table>

        <table class="table text-sm" style="table-layout:fixed">
            <tr>
                <td class="text-left column" style="padding:5px">
                    <p><strong>Descripcion:</strong> {{$action->description}}</p>
                </td>
                <td class="text-center column firma">
                    <img src="{{public_path('storage/'.$action->user->employee->firma)}}" class="image_firma" alt="">
                    Empleado
                </td>
            </tr>
        </table>

        <table class="table text-center text-sm" style="table-layout:fixed">
            <tr>
                <td>
                    <p style="padding:0%;border-bottom:1px solid black;margin: 25px 0px 0px 0px;">{{$action->user->employee->jefe->name}}</p>
                    <p style="padding:0%;margin:0%">{{$action->user->employee->jefe->employee->puesto}}</p>
                </td>
                <td class="text-center firma">
                    <img src="{{public_path('storage/'.$action->user->employee->jefe->employee->firma)}}" class="image_firma" alt="">
                </td>
            </tr>
            <tr>
                <td>
                    <p style="padding:0%;border-bottom:1px solid black;margin: 25px 0px 0px 0px;">Rene cisneros</p>
                    <p style="padding:0%;margin:0%">Gerente de IT</p>
                </td>
                <td class="text-center firma">
                    <img src="{{public_path('storage/'.$action->user->employee->firma)}}" class="image_firma" alt="">
                </td>
            </tr>
            <tr>
                <td>
                    <p style="padding:0%;border-bottom:1px solid black;margin: 25px 0px 0px 0px;">Rene cisneros</p>
                    <p style="padding:0%;margin:0%">Gerente de IT</p>
                </td>
                <td class="text-center firma">
                    <img src="{{public_path('storage/'.$action->user->employee->firma)}}" class="image_firma" alt="">
                </td>
            </tr>
            <tr>
                <td>
                    <p style="padding:0%;border-bottom:1px solid black;margin: 25px 0px 0px 0px;">{{$rrhh->name}}</p>
                    <p style="padding:0%;margin:0%">{{$rrhh->employee->puesto}}</p>
                </td>
                <td class="text-center firma">
                    <img src="{{public_path('storage/'.$rrhh->employee->firma)}}" class="image_firma" alt="">
                </td>
            </tr>
        </table>
    </main>
</body>
</html>