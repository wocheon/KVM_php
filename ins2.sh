#start install
#hostip=$(ip add show br01 | grep 192.168.1.* | gawk '{print $2}'| cut -c 1-13)
#cpurate=$(mpstat | tail -1 | gawk '{print 100-$13}')


virt-builder cirros-0.3.5 --size 5G -o /root/${1}.img

sudo virt-install --name ${1} --vcpus ${2} --ram ${3} --noautoconsole --graphics none  --disk path=/root/${1}.img --import

#vmname=$1
#vcpus=$2
#vram=$3

#insert into db
#mysql testdb -u root -ptoor -e "insert into hosttbl values ('$HOSTNAME','$hostip',$cpurate)"
#mysql testdb -u user1 -puser1 -e "insert into vmtbl values ('$HOSTNAME','$vmname',$vcpus,$vram)"
