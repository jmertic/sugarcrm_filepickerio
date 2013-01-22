task :default do
  timestamp = Time.now.strftime("%Y%m%d")
  `zip -r ../filepickerio-#{timestamp}.zip filepickerioconnector/ modules/ include/ Language/ LICENSE.txt manifest.php -x "*.DS_Store"`
end
