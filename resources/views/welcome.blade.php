<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>VueJS Tutorial</title>
</head>
<body>
    <div id="app">
        <!-- <user-dashboard></user-dashboard> -->
        <my-component>
            <ul>
                <li v-for="skill in skills" v-text="skill">
                    
                </li>
            </ul>
        </my-component>
    </div>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="/js/app.js"></script>
</body>
</html>