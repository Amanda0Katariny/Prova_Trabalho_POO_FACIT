<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <title>{{$title ?? 'Curso Laravel - Especializa TI'}}</title>
    <style>
            .switch,
            .switch * {
                -webkit-user-select: none;
                -moz-user-select: none;
                -khtml-user-select: none;
                -ms-user-select: none;
            }

            .switch label {
                cursor: pointer;
            }

            .switch label input[type=checkbox] {
                opacity: 0;
                width: 0;
                height: 0;
            }

            .switch label input[type=checkbox]:checked+.lever {
                background-color: #84c7c1;
            }

            .switch label input[type=checkbox]:checked+.lever:after {
                background-color: #26a69a;
                left: 24px;
            }

            .switch label .lever {
                content: "";
                display: inline-block;
                position: relative;
                width: 40px;
                height: 15px;
                background-color: #818181;
                border-radius: 15px;
                margin-right: 10px;
                transition: background 0.3s ease;
                vertical-align: middle;
                margin: 0 16px;
            }

            .switch label .lever:after {
                content: "";
                position: absolute;
                display: inline-block;
                width: 21px;
                height: 21px;
                background-color: #F1F1F1;
                border-radius: 21px;
                box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4);
                left: -5px;
                top: -3px;
                transition: left 0.3s ease, background .3s ease, box-shadow 0.1s ease;
            }

            input[type=checkbox]:checked:not(:disabled)~.lever:active::after,
            input[type=checkbox]:checked:not(:disabled).tabbed:focus~.lever::after {
                box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(38, 166, 154, 0.1);
            }

            input[type=checkbox]:not(:disabled)~.lever:active:after,
            input[type=checkbox]:not(:disabled).tabbed:focus~.lever::after {
                box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(0, 0, 0, 0.08);
            }

            .switch input[type=checkbox][disabled]+.lever {
                cursor: default;
            }

            .switch label input[type=checkbox][disabled]+.lever:after,
            .switch label input[type=checkbox][disabled]:checked+.lever:after {
                background-color: #BDBDBD;
            }
        </style>
    </head>
    <div class="switch">
            <label>NÃO<input type="checkbox" name="broadcast" value="1"><span class="lever"></span>SIM</label>
        </div>

        <!-- USANDO checked com PHP -->
        <div class="switch">
            <label>NÃO<input type="checkbox" name="broadcast" value="1"{{ ($teste == 1) ? 'checked' : false}}><span class="lever"></span>SIM</label>
        </div>

</html>
