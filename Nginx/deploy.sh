#!/bin/bash
# 网站的代码仓库目录
input="website"
# Nginx 中配置的网站的 HTML 根目录

output="/home/admin/servicemesher.com"
cd $input
git pull

cd ..
cp -r $input/public/* $output