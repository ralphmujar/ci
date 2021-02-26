pipeline {
    agent any
    stages {
        stage("deploy") {
            steps {
                build job: 'down', parameters[string(name: 'POD', value: 'prod')]
            }
        }


    }
}
