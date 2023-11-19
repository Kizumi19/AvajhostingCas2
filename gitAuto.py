#!/usr/bin/env python3

import subprocess
import git
import os

# Configuració
db_name = "avajhosting"
db_user = "root"
db_password = "root" 
dump_file = "backup.sql"
repo_dir = "."
repo_url = "https://github.com/Kizumi19/AvajhostingCas2"

# Exportar la Base de Dades
command = f"docker exec -i avajhostingcas2-db-1 mysqldump -u {db_user} -p{db_password} {db_name}"
with open(dump_file, 'w') as file:
    subprocess.run(command, shell=True, check=True, stdout=file)
# Git
os.chdir(repo_dir)
repo = git.Repo(repo_dir)
repo.git.add(dump_file)
repo.index.commit("Actualitzar backup de la base de dades")
origin = repo.remote(name='origin')
origin.push()

print("Backup fet i pujat a GitHub.")
