pipeline {
    agent any

    stages {

        stage('Clone Repository') {
            steps {
                git branch: 'main',
                    url: 'https://github.com/puskesmasakreditasi-cpu/ebisnis.git'
            }
        }

        stage('Check PHP Version') {
            steps {
                bat 'php -v'
            }
        }

        stage('Install Dependencies (Composer)') {
            when {
                expression { fileExists('composer.json') }
            }
            steps {
                bat 'composer install --no-interaction --prefer-dist'
            }
        }

        stage('Run PHP Script') {
            steps {
                bat 'php index.php'
            }
        }
    }

    post {
        success {
            echo "Pipeline berhasil dijalankan!"
        }
        failure {
            echo "Pipeline gagal, cek error!"
        }
    }
}
