def LONE():
  uuid = str(os.geteuid()) + str(os.getlogin())
  id = "-".join(uuid)
  print("\033[2;36m; ID : "+id)
  try:
    httpCaht = requests.get("https://github.com/kassem39/H.py/edit/main/H.py").text
    if id in httpCaht:
      print('')
      print("""\033[1;92m 𝗔𝗰𝘁𝗶𝘃𝗮𝘁𝗶𝗼𝗻 𝗰𝗼𝗺𝗽𝗹𝗲𝘁𝗲𝗱 𝘀𝘂𝗰𝗰𝗲𝘀𝘀𝗳𝘂𝗹𝗹𝘆 """)
      msg = str(os.geteuid())
      time.sleep(1)
      pass
    else:
      print("Done")
      print("\033[2;36m 𝗔𝗰𝘁𝗶𝘃𝗮𝘁𝗶𝗼𝗻 𝗰𝗼𝗺𝗽𝗹𝗲𝘁𝗲𝗱 𝘀𝘂𝗰𝗰𝗲𝘀𝘀𝗳𝘂𝗹𝗹𝘆 @Y_N_1 ")
      
      time.sleep(1)
      sys.exit()  
  except:
    sys.exit()
    
    LONE()
LONE()
