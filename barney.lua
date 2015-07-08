isSad = true

SadBarney = {}

function SadBarney:new(o)
	local self = {};
	self.stop = function()
		print ("I stop being sad")
	end
	return self
end

function sad()
	if isSad then
		isSad = false
        print("When I get sad,")
		return true
	else
		return SadBarney:new()
	end
end

function beAwesome()
	print("and be awesome instead")
end

--life motto
if sad() then
	sad().stop()
	beAwesome()
end
