app.controller ('ContactsController', function($scope, $http, API_URL) {
	$http.get(API_URL + "contacts").then(function(response) {
		$scope.contacts = response.data.data;
	},function(error){});

	$scope.toggle = function(modal, id) {
		$scope.modal = modal;
		switch (modal) {
			case 'add':
				$scope.form_title = "Add new contact";
				console.log("add");
				break;
			case 'edit':
				$scope.form_title = "Contact";
				$scope.id = id;
				$http.get (API_URL + 'contacts/' + id).success(function(response) {
					console.log(response);
					$scope.contact = response;
				});
				break;
			default:
				console.log("fail");
				break;
		}
		console.log(id);
		$('#contactModal').modal('show');
	};

	$scope.save = function(modal, id){
		var url = API_URL + "contacts";
		if (modal == 'edit') {
			url += "/" + id;
		}

		$http({
			method: 'POST',
			url: url,
			data: $.param($scope.contact),
			headers: {'Content-Type': 'application/x-www-form-urlencoded'}
		}).success(function(response) {
			console.log(response);
			location.reload();
		}).error(function(response){
			console.log(response);
			alert('error: post to server');
		});
	}

	$scope.confirmDelete = function(id) {
		var isConfirmDelete = confirm('Are you sure to delete this contact?');
		if (isConfirmDelete) {
			$http({
				method: 'DELETE',
				url: API_URL + 'contacts/' +id
			}).success(function(data) {
				console.log(data);
				location.reload();
			}).error(function(data) {
				console.log(data);
				alert ('error: delete to server');
			});
		}
		else {
			return false;
		}
	}
});