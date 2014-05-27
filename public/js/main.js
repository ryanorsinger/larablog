
/* scope is the glue between View and Controller */
/* Anything on Scope should be a Two Way Street thanks to two way data binding */

function TodosController($scope, $http) {
    // $scope.todos = [
    //     { body: 'Go to the store', completed: false },
    //     { body: 'Finish the video', completed: false},
    //     { body: 'Remember to get up and stretch', completed: false },
    //     { body: 'Go for a short walk', completed: false },
    //     { body: 'Get some fresh air :D', completed: false },
    //     { body: 'Publish some blog posts, yo!', completed: false }
    // ];

    // console.log($http);

    $http.get('/todos').success(function(todos) {

        $scope.todos = todos;
    });

    $scope.remaining = function() {
        var count = 0;

        angular.forEach($scope.todos, function(todo) {
            count += todo.completed ? 0 : 1;
        });

        return count;
    }

    $scope.addTodo = function() {
        $scope.todos.push({
            body: $scope.newTodoText,
            completed: false
        });
    };


}
