<!DOCTYPE html>
<html ng-app="oweyaa">
    <head>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.5/angular.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.5/angular-route.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.5/angular-sanitize.min.js"></script>
        <script src="/views/angularControllers/angular.js"></script>
        <script>
			var str = location.href;
			document.write('<base href="' + str + '" />');
		</script>
    </head>
    <body ng-view>

    </body>
</html>