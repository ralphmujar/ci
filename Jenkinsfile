pipeline {
    agent any
	parameters {
		booleanParam(name: 'executeTests', defaultValue: true, description: '')
	}
    stages {

        stage("test") {
			when {
				expression {
					params.executeTests == true
				}
			}
            steps {
				sh "phpunit tests"
            }
        }


        stage("deploy") {
            steps {
               sh "echo deployed!"
            }
        }


    }
}
