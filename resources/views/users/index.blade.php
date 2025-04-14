<!DOCTYPE html>
<head>
    <title>Users</title>
    <meta charset="UTF-8" lang="eng">
    <style>
        body {
            /* background: url("https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fexternal-preview.redd.it%2F1zaRSeowEbfX9L9LR7UxkNU8wKdjlmtxrhF4133WZlk.png%3Fauto%3Dwebp%26s%3Dd147391b3648c3fb34d3359bdfce3aef4caf014a&f=1&nofb=1&ipt=41690e008d232ddc1ec6f718438ba98c1007865e250bc9c588e798611987506d");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover; */

            background-image: linear-gradient(135deg, black, white);
            min-height: 100vh;
            padding: 20px;
        }

        table {
            width: 100%;
            margin-top: 40px;
            text-align: center;
            border-collapse: collapse;
            border-color: grey ;
            color: white;
            font-size: 160%;
        }

        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: white;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: black;
        }

        tr:nth-child(odd) {
            background-color: black;
        }

        tr:hover {
            background-color: grey;
        }

        .delete-btn {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .delete-btn:hover {
            background-color: #a71d2a;
        }


        .button-welcome {
            position: fixed;
            top: 20px;
            right: 20px;
            display: inline-block;
            text-decoration: none;
            color: white;
            background-color: #dc3545;
            padding: 10px 20px;
            border-radius: 10px;
            font-size: 1rem;
            transition: background-color 0.3s, transform 0.2s;
        }
    </style>
</head>
<body>
    <a class="button-welcome" href="/">Welcome Page</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <form method="post" accept="/users/{{$user->id}}">
                        @csrf
                        @method('delete')
                        <button class="delete-btn" type="submit">delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>