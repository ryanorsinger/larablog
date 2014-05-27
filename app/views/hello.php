<!doctype html>
<html lang="en" ng-app>
<head>

	<meta charset="UTF-8">
	<title>Angular + Laravel Experiment</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.content {
			text-align: left;
			margin-left: 50px;
			padding-left: 100px;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}

		small {
			font-size: .8em;
			color: gray;
		}

	</style>

</head>

<body ng-controller="TodosController">
	<h1>Howdy</h1>
	<h2>Angular + Laravel Experiment</h2>
	<hr>
	<div class="content">
	<h1>
		Task List of "To Dos"
		<small ng-if="remaining()">({{ remaining() }} remaining)</small>

	</h1>

		<input type="test" placeholder "Filter todos" ng-model="searchTodos">
		<ul>
			<li ng-repeat="todo in todos | filter:searchTodos">
			<input type="checkbox" ng-model="todo.completed">
				{{ todo.body }}
			</li>
		</ul>
	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular.js"></script>
	<script src="/js/main.js"></script>
</body>
</html>
