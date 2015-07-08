isSad = True

class SadBarney:
	def stop(self):
		print "I stop being sad"

def sad():
    global isSad
    if (isSad):
        isSad = False
        print "When I get sad,"
        return True
    else:
        return SadBarney()

def beAwesome():
    print "and be awesome instead"
    
#life motto
if (sad() == True): 
    sad().stop()
    beAwesome()
