pipeline {
    agent any
	parameters {
		choice(name: 'POD', choices: ['dev', 'qa', 'prod'], description: '')
	}
    stages {
        stage("deploy") {
            steps {
                build job: 'down', parameters: [string(name: 'SRV', value: String.valueOf(POD)), string(name: 'image', value: 'ralphmujar/node:'+env.GIT_COMMIT)]
            }
        }


    }
}
