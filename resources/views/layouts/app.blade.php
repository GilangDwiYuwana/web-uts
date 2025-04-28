<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Manajemen Kursus</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8fafc;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        }
        h1 {
            margin-bottom: 20px;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            padding: 12px 15px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f1f5f9;
        }
        tr:hover {
            background-color: #f9fafb;
        }
        .btn {
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 14px;
            cursor: pointer;
            display: inline-block;
        }
        .btn-primary {
            background-color: #3b82f6;
            color: white;
        }
        .btn-warning {
            background-color: #facc15;
            color: black;
        }
        .btn-danger {
            background-color: #ef4444;
            color: white;
        }
        .btn-secondary {
            background-color: #6b7280;
            color: white;
        }
        .btn-sm {
            padding: 5px 8px;
            font-size: 12px;
        }
        .alert {
            padding: 10px;
            background-color: #d1fae5;
            color: #065f46;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        form {
            display: inline;
        }
        .d-flex {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .pagination {
            margin-top: 20px;
            list-style: none;
            display: flex;
            justify-content: flex-end;
            padding: 0;
        }
        .pagination li {
            margin-left: 5px;
        }
        .pagination a, .pagination span {
            padding: 8px 12px;
            background-color: #f1f5f9;
            color: #333;
            text-decoration: none;
            border-radius: 5px;
        }
        .pagination .active span {
            background-color: #3b82f6;
            color: white;
        }
    </style>
</head>
<body>

    @yield('content')

</body>
</html>
