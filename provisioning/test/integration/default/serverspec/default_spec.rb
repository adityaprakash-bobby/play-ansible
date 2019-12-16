require 'spec_helper'

describe 'Nginx Installation' do
    context package('nginx') do
        it { should be_installed } 
    end

    context service('nginx') do
        it { should be_running }
    end
end

describe 'MySQL Installation' do 
    context package('mysql-server') do
        it { should be_installed }
    end
    
    context service('mysql') do
        it { should be_running }
    end
end

describe 'PHP Installation' do
    context package('php') do
        it { should be_installed }
    end

    context service('php7.0-fpm') do
        it { should be_running }
    end

    context command('php --version') do
        it (:stdout) { should contain 'PHP7' }
    end
end

describe 'Wordpress' do
    context file('/var/www/book.examle.com/wp-config.php') do
        it { should exist }
    end

    context command('mysql -u root michaelwp -e "SELECT post_title FROM wp_posts WHERE id=1;"') do
        it (:stdout) { should contain 'Hey There' }
    end
end
