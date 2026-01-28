pipeline {
    agent any

    stages {

        stage('Checkout Code') {
            steps {
                git branch: 'main', url: 'https://github.com/eshadharwadkar/library-management-devops.git'
            }
        }

        stage('Build Docker Image') {
            steps {
                bat 'docker build -t library-app .'
            }
        }

        stage('Stop Old Container') {
            steps {
                bat 'docker stop library-app || exit 0'
                bat 'docker rm library-app || exit 0'
            }
        }

        stage('Run Container') {
            steps {
                bat 'docker run -d -p 9090:80 --name library-app library-app'
            }
        }
    }
}
