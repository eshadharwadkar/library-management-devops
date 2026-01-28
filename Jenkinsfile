pipeline {
    agent any

    stages {
        stage('Clone Repo') {
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
                bat 'docker stop library-container || exit 0'
                bat 'docker rm library-container || exit 0'
            }
        }

        stage('Run New Container') {
            steps {
                bat 'docker run -d -p 8085:80 --name library-container library-app'
            }
        }
    }
}
