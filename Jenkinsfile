pipeline {
    agent any

    stages {

        stage("test") {
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
