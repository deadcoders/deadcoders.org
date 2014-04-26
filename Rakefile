task :deploy do
  sh "ssh -A deadcoders.org 'cd sites/deadcoders.org && git pull origin master'"
end

task :serve do
  sh "php -S localhost:8000 -t public_html"
end