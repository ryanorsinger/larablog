
/* scope is the glue between View and Controller */
function TodosController($scope) {
    $scope.todos = [
        { body: 'Go to the store', completed: false },
        { body: 'Finish the video', completed: false},
        { body: 'Remember to get up and stretch', completed: false },
        { body: 'Go for a short walk', completed: false },
        { body: 'Get some fresh air :D', completed: false },
        { body: 'Publish some blog posts, yo!', completed: false }
    ];

    $scope.remaining = function() {
        var count = 0;

        angular.forEach($scope.todos, function(todo) {
            count += todo.completed ? 0 : 1;
        });

        return count;
    }
}
